<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Dashboard view for user
    public function dashboard()
    {
        return view('user.dashboard');  // Ensure this view exists
    }

    // Show the order form with available medicines (in stock)
    public function showOrderForm()
    {
        $medicines = Medicine::where('quantity', '>', 0)->get();
        return view('user.order_medicine', compact('medicines'));
    }

    // Handle order submission
    public function submitOrder(Request $request)
    {
        $request->validate([
            'medicine_id' => 'required|exists:medicines,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $medicine = Medicine::findOrFail($request->medicine_id);

        if ($request->quantity > $medicine->quantity) {
            return back()->with('error', 'Not enough stock available.');
        }

        $totalPrice = $medicine->price * $request->quantity;

        // Create the order record
        $order = Order::create([
            'user_id' => session('user_id'), // Make sure user_id is in session
            'order_number' => 'ORD-' . strtoupper(uniqid()),
            'total_price' => $totalPrice,
            'status' => 'Paid',
        ]);

        // Create order item record
        OrderItem::create([
            'order_id' => $order->id,
            'medicine_id' => $medicine->id,
            'quantity' => $request->quantity,
            'price' => $medicine->price,
        ]);

        // Decrement medicine stock
        $medicine->decrement('quantity', $request->quantity);

        return redirect()->route('user.bill', $order->id)->with('success', 'Order placed successfully.');
    }

    // Show bill for a given order
    public function showBill($orderId)
    {
        $order = Order::with(['items.medicine', 'user'])->findOrFail($orderId);
        return view('user.bill', compact('order'));
    }

    // View all orders for the logged-in user
    public function viewOrders()
    {
        $userId = session('user_id');
        $orders = Order::where('user_id', $userId)->with('items.medicine')->get();
        return view('user.view_orders', compact('orders'));
    }

    // Show order history for the logged-in user
    public function orderHistory()
    {
        $userId = session('user_id');
        $orders = Order::where('user_id', $userId)
            ->with('items.medicine')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('user.order_history', compact('orders'));
    }
}
