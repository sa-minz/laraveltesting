@extends('layouts.user')

@section('content')
<div class="container my-5" style="max-width: 600px;">
    <h2 class="text-primary mb-4">Complete Payment</h2>

    <div class="card p-4 mb-4">
        <div class="order-summary">
            <h5>Order Details</h5>
            <p><strong>Medicine:</strong> {{ $order->medicine->name }}</p>
            <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
            <p><strong>Unit Price:</strong> Rs. {{ number_format($order->medicine->price, 2) }}</p>
            <p><strong>Total Price:</strong> Rs. {{ number_format($order->total_price, 2) }}</p>
        </div>
    </div>

    <button type="button" id="proceedToPaymentBtn" class="btn btn-primary w-100 py-3">
        <i class="bi bi-credit-card me-2"></i> Proceed to Payment
    </button>

    <!-- Order Confirmation Modal -->
    <div class="modal fade" id="orderConfirmationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Confirm Order</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle-fill me-2"></i> Please review your order
                    </div>
                    <div class="order-summary p-3" style="background-color: #f8f9fa; border-radius: 5px;">
                        <h6 class="mb-3">Order Summary</h6>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Medicine:</span>
                            <span>{{ $order->medicine->name }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Quantity:</span>
                            <span>{{ $order->quantity }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Unit Price:</span>
                            <span>Rs. {{ number_format($order->medicine->price, 2) }}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <span>Total Amount:</span>
                            <span>Rs. {{ number_format($order->total_price, 2) }}</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="confirmOrderBtn" class="btn btn-success">
                        <i class="bi bi-check-circle-fill me-1"></i> Confirm Order
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bank Details Modal -->
    <div class="modal fade" id="bankDetailsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Enter Bank Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="paymentForm" method="POST" action="{{ route('user.confirm_payment', $order->id) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="cardNumber" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="cardNumber" name="card_number" 
                                   placeholder="1234 5678 9012 3456" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="expiryDate" class="form-label">Expiry Date</label>
                                <input type="text" class="form-control" id="expiryDate" name="expiry_date" 
                                       placeholder="MM/YY" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cvv" name="cvv" 
                                       placeholder="123" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="cardName" class="form-label">Name on Card</label>
                            <input type="text" class="form-control" id="cardName" name="card_name" 
                                   placeholder="John Doe" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-credit-card me-1"></i> Submit Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize modals
    const orderModal = new bootstrap.Modal(document.getElementById('orderConfirmationModal'));
    const bankModal = new bootstrap.Modal(document.getElementById('bankDetailsModal'));
    
    // Show order confirmation modal when payment button is clicked
    document.getElementById('proceedToPaymentBtn').addEventListener('click', function() {
        orderModal.show();
    });
    
    // When order is confirmed, show bank details modal
    document.getElementById('confirmOrderBtn').addEventListener('click', function() {
        orderModal.hide();
        bankModal.show();
    });
    
    // Basic validation for card inputs
    document.getElementById('cardNumber').addEventListener('input', function(e) {
        this.value = this.value.replace(/\D/g, '').replace(/(\d{4})(?=\d)/g, '$1 ');
    });
    
    document.getElementById('expiryDate').addEventListener('input', function(e) {
        this.value = this.value.replace(/\D/g, '').replace(/(\d{2})(?=\d)/g, '$1/');
    });
});
</script>
@endsection
@endsection