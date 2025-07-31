<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Show the order form
    public function create()
    {
        $medicines = Medicine::all();
        return view('user.order_medicine', compact('medicines'));
    }

    // Store the order and redirect to receipt
    public function store(Request $request)
    {
        $request->validate([
            'medicine_id' => 'required|exists:medicines,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $medicine = Medicine::findOrFail($request->medicine_id);

        $order = Order::create([
            'user_id' => Auth::id(),
            'medicine_id' => $medicine->id,
            'quantity' => $request->quantity,
            'status' => 'paid', // or 'pending' if payment is separate
        ]);

        return redirect()->route('user.receipt', $order->id)->with('success', 'Order placed successfully!');
    }

    // Show the receipt
    public function receipt($id)
    {
        $order = Order::with('medicine')->findOrFail($id);

        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        return view('user.order_receipt', compact('order'));
    }

    // Show all orders for current user
    public function index()
    {
        $orders = Order::with('medicine')->where('user_id', Auth::id())->latest()->get();
        return view('user.view_orders', compact('orders'));
    }

    // Show order history
    public function history()
    {
        $orders = Order::with('medicine')->where('user_id', Auth::id())->where('status', 'paid')->get();
        return view('user.order_history', compact('orders'));
    }
}
