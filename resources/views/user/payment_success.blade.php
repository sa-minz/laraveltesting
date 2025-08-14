@extends('layouts.user')

@section('content')
<div class="container my-5">
    <div class="card shadow-sm border-0 p-4 text-center">
        <div class="mb-4">
            <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
        </div>
        
        <h2 class="text-success mb-3">Payment Successful!</h2>
        <p class="lead">Thank you for your payment.</p>
        
        <div class="receipt-summary bg-light p-4 my-4 rounded text-start">
            <h5 class="mb-3">Order Summary</h5>
            <p><strong>Order ID:</strong> #{{ $order->id }}</p>
            <p><strong>Medicine:</strong> {{ $order->medicine->name }}</p>
            <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
            <p><strong>Total Paid:</strong> Rs. {{ number_format($order->total_price, 2) }}</p>
            <p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>
            <p><strong>Date:</strong> {{ $order->updated_at->format('d M Y, h:i A') }}</p>
        </div>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="{{ route('user.receipt.download', $order->id) }}" class="btn btn-primary">
                <i class="bi bi-download me-2"></i> Download Receipt
            </a>
            <a href="{{ route('user.order_history') }}" class="btn btn-outline-secondary">
                <i class="bi bi-list-ul me-2"></i> View Orders
            </a>
        </div>
    </div>
</div>
@endsection