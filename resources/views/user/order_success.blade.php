@extends('layouts.user')

@section('content')
<div class="container mt-4">
    <div class="card p-4 text-center">
        <h2 class="text-success mb-4">Order Successful!</h2>
        
        <div class="mb-4">
            <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
        </div>
        
        <h4 class="mb-3">Order Details</h4>
        <div class="text-start mb-4">
            <p><strong>Order Number:</strong> {{ $order->id }}</p>
            <p><strong>Medicine:</strong> {{ $order->medicine->name }}</p>
            <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
            <p><strong>Total Price:</strong> Rs. {{ number_format($order->total_price, 2) }}</p>
            <p><strong>Status:</strong> <span class="badge bg-success">{{ ucfirst($order->status) }}</span></p>
        </div>

        <div class="d-flex justify-content-center gap-3">
            <button onclick="window.print()" class="btn btn-secondary">
                <i class="bi bi-printer-fill me-2"></i>Print Receipt
            </button>
            <a href="{{ route('user.order_medicine') }}" class="btn btn-primary">
                <i class="bi bi-cart-plus-fill me-2"></i>Order More
            </a>
        </div>
    </div>
</div>
@endsection