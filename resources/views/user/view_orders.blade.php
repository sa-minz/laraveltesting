@extends('layouts.user')

@section('content')
<div class="container p-4" style="background-color:#eaf6ff; border-radius: 10px;">
  <h2 class="mb-4 text-center text-primary">📋 Current Orders</h2>

  @if($orders->isEmpty())
    <p class="text-center">No current orders found.</p>
  @else
    <div class="table-responsive">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-primary">
          <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Medicine</th>
            <th scope="col">Quantity</th>
            <th scope="col">Status</th>
            <th scope="col">Order Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr>
              <td>{{ $order->id }}</td>
              <td>{{ $order->medicine->name }}</td> <!-- Fixed this line -->
              <td>{{ $order->quantity }}</td>
              <td>
                <span class="badge 
                  @if($order->status === 'pending') bg-warning
                  @elseif($order->status === 'paid') bg-success
                  @elseif($order->status === 'cancelled') bg-danger
                  @else bg-secondary
                  @endif">
                  {{ ucfirst($order->status) }}
                </span>
              </td>
              <td>{{ $order->created_at->format('d M Y') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
</div>
@endsection