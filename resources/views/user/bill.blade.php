@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Order Bill</h2>

    <div class="card p-3">
        <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
        <p><strong>Customer:</strong> {{ $order->user->name }}</p>
        <p><strong>Status:</strong> {{ $order->status }}</p>
        <p><strong>Date:</strong> {{ $order->created_at->format('Y-m-d H:i') }}</p>

        <h4 class="mt-3">Order Details:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Medicine</th>
                    <th>Unit Price (Rs.)</th>
                    <th>Quantity</th>
                    <th>Subtotal (Rs.)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item->medicine->name }}</td>
                        <td>{{ number_format($item->price, 2) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ number_format($item->price * $item->quantity, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h5 class="text-end">Total: Rs. {{ number_format($order->total_price, 2) }}</h5>

        <div class="text-end mt-3">
            <button class="btn btn-success" onclick="window.print()">Print Bill</button>
        </div>
    </div>
</div>
@endsection
