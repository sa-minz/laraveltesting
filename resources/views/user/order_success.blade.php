@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Order Successful</h2>

    <p>Thank you for your order!</p>

    <h4>Order Details</h4>
    <ul>
        <li>Order Number: {{ $order->order_number }}</li>
        <li>Medicine: {{ $order->medicine->name }}</li>
        <li>Quantity: {{ $order->quantity }}</li>
        <li>Total Price: ${{ number_format($order->total_price, 2) }}</li>
        <li>Status: {{ ucfirst($order->status) }}</li>
    </ul>

    <button onclick="window.print()" class="btn btn-secondary">Print Bill</button>
    <a href="{{ route('user.order_medicine') }}" class="btn btn-primary">Order More</a>
</div>
@endsection
