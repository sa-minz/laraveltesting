@extends('layouts.user')

@section('content')
<div class="container mt-4 p-4" style="background-color:#f5fcff; border-radius:10px;">
    <h2 class="mb-4 text-center">Order Receipt</h2>
    <div class="card p-3">
        <p><strong>Order ID:</strong> {{ $order->id }}</p>
        <p><strong>Medicine:</strong> {{ $order->medicine->name }}</p>
        <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
        <p><strong>Total Price:</strong> Rs. {{ $order->quantity * $order->medicine->price }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
        <p><strong>Ordered At:</strong> {{ $order->created_at->format('Y-m-d H:i') }}</p>
    </div>
</div>
@endsection
