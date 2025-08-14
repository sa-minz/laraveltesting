@extends('layouts.user')

@section('content')
<div class="container my-5" style="max-width: 600px;">
    <h2 class="text-primary mb-4">Payment Details</h2>

    <div class="card p-4 mb-4">
        <p><strong>Medicine:</strong> {{ $order->medicine->name }}</p>
        <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
        <p><strong>Total Price:</strong> Rs. {{ number_format($order->total_price, 2) }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    </div>

    <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#bankDetailsModal">
        Enter Bank Details & Confirm Payment
    </button>
</div>

<!-- Bank Details Modal -->
<div class="modal fade" id="bankDetailsModal" tabindex="-1" aria-labelledby="bankDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 10px;">
      <div class="modal-header">
        <h5 class="modal-title" id="bankDetailsModalLabel">Bank Account Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{ route('user.confirm_payment', ['order' => $order->id]) }}">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="account_name" class="form-label">Account Holder Name</label>
            <input type="text" name="account_name" id="account_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="account_number" class="form-label">Account Number</label>
            <input type="text" name="account_number" id="account_number" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="bank_name" class="form-label">Bank Name</label>
            <input type="text" name="bank_name" id="bank_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="payment_reference" class="form-label">Payment Reference (optional)</label>
            <input type="text" name="payment_reference" id="payment_reference" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success w-100">Confirm Payment</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
@endsection
