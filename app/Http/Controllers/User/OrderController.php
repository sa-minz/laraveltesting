<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Medicine;

class OrderController extends Controller
{
    // Show the order medicine page with categories and medicines
    public function showOrderForm()
    {
        // Fetch medicines grouped by category (assuming 'category' is a column)
        $medicines = Medicine::where('quantity', '>', 0)->get()->groupBy('category');

        return view('user.order_medicine', ['categories' => $medicines]);
    }

    // Handle the submission of an order
    public function submitOrder(Request $request)
    {
        $request->validate([
            'medicine_id' => 'required|exists:medicines,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $userId = auth()->id();

        // Create order record (simplified example)
        $order = new Order();
        $order->user_id = $userId;
        $order->medicine_id = $request->medicine_id;
        $order->quantity = $request->quantity;
        $order->status = 'pending';
        $order->total_price = 0; // Calculate if needed
        $order->save();

        return redirect()->route('user.order_history')->with('success', 'Order placed successfully.');
    }

    // Show all orders of the logged-in user
    public function orderHistory()
    {
        $userId = auth()->id();
        $orders = Order::where('user_id', $userId)->get();

        return view('user.order_history', compact('orders'));
    }
}
