<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Medicine;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderController extends Controller
{
    // Show user dashboard
    public function dashboard()
    {
        return view('user.dashboard');
    }

    // Show order medicine form
    public function showOrderForm()
    {
        $medicines = Medicine::where('quantity', '>', 0)->get();
        return view('user.order_medicine', compact('medicines'));
    }

    // Submit new order
    public function submitOrder(Request $request)
    {
        $request->validate([
            'medicine_id' => 'required|exists:medicines,id',
            'quantity'    => 'required|integer|min:1',
        ]);

        $medicine = Medicine::findOrFail($request->medicine_id);

        if ($medicine->quantity < $request->quantity) {
            return back()->with('error', 'Not enough stock available');
        }

        $order = Order::create([
            'user_id'     => Auth::id(),
            'medicine_id' => $request->medicine_id,
            'quantity'    => $request->quantity,
            'status'      => 'pending',
            'total_price' => $medicine->price * $request->quantity
        ]);

        $medicine->decrement('quantity', $request->quantity);

        return redirect()->route('user.payment', $order->id);
    }

    // Show bill
    public function showBill(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        return view('user.bill', compact('order'));
    }

    // Show payment page
    public function showPayment(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        return view('user.payment', ['order' => $order->load('medicine')]);
    }

    // Process payment with bank details
    public function confirmPayment(Order $order, Request $request)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'card_number' => 'required|string|min:16',
            'expiry_date' => 'required|string|min:5',
            'cvv' => 'required|string|min:3|max:4',
            'card_name' => 'required|string'
        ]);

        // Generate a transaction ID
        $transactionId = 'TXN-' . strtoupper(uniqid());

        // Update order status with payment details
        $order->update([
            'status' => 'paid',
            'transaction_id' => $transactionId,
            'payment_method' => 'card',
            'payment_details' => json_encode([
                'card_last_four' => substr($request->card_number, -4),
                'card_type' => $this->getCardType($request->card_number),
                'expiry_date' => $request->expiry_date
            ]),
            'payment_proof' => 'card_payment'
        ]);

        // Generate receipt PDF
        $this->generateReceipt($order);

        return redirect()->route('user.payment.success', $order->id)
                       ->with('success', 'Payment completed successfully!')
                       ->with('order_id', $order->id);
    }

    // Helper method to determine card type
    private function getCardType($cardNumber)
    {
        $cardNumber = preg_replace('/\D/', '', $cardNumber);
        $firstDigit = substr($cardNumber, 0, 1);
        
        switch ($firstDigit) {
            case '4': return 'Visa';
            case '5': return 'Mastercard';
            case '3': return 'American Express';
            case '6': return 'Discover';
            default: return 'Unknown';
        }
    }

    // Show payment success page
    public function paymentSuccess(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        return view('user.payment_success', compact('order'));
    }

    // Download receipt as PDF
    public function downloadReceipt(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        $data = ['order' => $order->load('medicine')];
        $pdf = PDF::loadView('user.order_receipt_pdf', $data);
        
        return $pdf->download('receipt-'.$order->id.'.pdf');
    }

    // View current orders
    public function viewOrders()
    {
        $orders = Order::with('medicine')
                     ->where('user_id', Auth::id())
                     ->whereIn('status', ['pending', 'processing'])
                     ->latest()
                     ->get();

        return view('user.view_orders', compact('orders'));
    }

    // View order history
    public function orderHistory()
    {
        $orders = Order::with('medicine')
                     ->where('user_id', Auth::id())
                     ->latest()
                     ->get();

        return view('user.order_history', compact('orders'));
    }

    /**
     * Generate and save PDF receipt for an order
     */
    private function generateReceipt(Order $order)
    {
        $data = ['order' => $order->load('medicine')];
        $pdf = PDF::loadView('user.order_receipt_pdf', $data);
        
        // Ensure the receipts directory exists
        if (!file_exists(storage_path('app/public/receipts'))) {
            mkdir(storage_path('app/public/receipts'), 0755, true);
        }
        
        $pdf->save(storage_path('app/public/receipts/receipt-'.$order->id.'.pdf'));
    }
}