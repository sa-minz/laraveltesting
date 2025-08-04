@extends('layouts.user')

@section('content')
<div class="container mt-4">
    <h2>Complete Payment</h2>
    
    <div class="card p-4">
        <h4>Order #{{ $order->order_number }}</h4>
        <p>Total: Rs. {{ number_format($order->total_price, 2) }}</p>
        
        <form action="{{ route('user.confirm_payment', $order->id) }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label>Card Number</label>
                <input type="text" class="form-control" placeholder="1234 5678 9012 3456" required>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Expiry Date</label>
                    <input type="text" class="form-control" placeholder="MM/YY" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>CVV</label>
                    <input type="text" class="form-control" placeholder="123" required>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">
                Pay Rs. {{ number_format($order->total_price, 2) }}
            </button>
        </form>
    </div>
</div>
@endsection