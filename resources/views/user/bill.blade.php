@extends('layouts.user')

@section('content')
<div class="container my-5" style="max-width: 600px;">
    <h2 class="text-primary mb-4">Order Bill</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card p-4">
        <p><strong>Order ID:</strong> {{ $order->id }}</p>
        <p><strong>Medicine:</strong> {{ $order->medicine->name }}</p>
        <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
        <p><strong>Unit Price:</strong> Rs. {{ number_format($order->medicine->price, 2) }}</p>
        <p><strong>Total Price:</strong> Rs. {{ number_format($order->total_price, 2) }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
        <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y, H:i') }}</p>
        @if($order->transaction_id)
            <p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>
        @endif
    </div>

    <div class="mt-4 d-flex justify-content-between">
        <a href="{{ route('user.order_history') }}" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i> Back to Orders
        </a>
        <a href="{{ route('user.receipt.download', $order->id) }}" class="btn btn-success">
            <i class="bi bi-download"></i> Download Receipt
        </a>
        <button onclick="window.print()" class="btn btn-secondary">
            <i class="bi bi-printer"></i> Print Receipt
        </button>
    </div>
</div>
@endsection