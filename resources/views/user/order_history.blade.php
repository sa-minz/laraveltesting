@extends('layouts.user')

@section('content')
<div class="container my-5" style="max-width: 800px;">
    <h2 class="text-primary mb-4">Your Order History</h2>

    @if(session('payment_success'))
        <div class="alert alert-success">
            Payment successful for Order #{{ session('order_id') }}
        </div>
    @endif

    @if($orders->isEmpty())
        <p>You have no orders yet.</p>
        <a href="{{ route('user.order_medicine') }}" class="btn btn-primary">Place an Order</a>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Medicine</th>
                    <th>Quantity</th>
                    <th>Total Price (Rs.)</th>
                    <th>Status</th>
                    <th>Ordered At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->medicine->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ number_format($order->total_price, 2) }}</td>
                    <td>
                        <span class="badge 
                            @if($order->status === 'pending') bg-warning
                            @elseif($order->status === 'paid') bg-success
                            @else bg-secondary
                            @endif">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>
                    <td>{{ $order->created_at->format('d M Y') }}</td>
                    <td>
                        @if($order->status === 'pending')
                            <a href="{{ route('user.payment', $order->id) }}" class="btn btn-sm btn-warning">Pay Now</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection