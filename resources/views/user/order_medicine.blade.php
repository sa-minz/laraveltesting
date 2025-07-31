@extends('layouts.user')

@section('content')
<div class="container d-flex justify-content-center my-5">
    <div class="w-100" style="max-width: 500px; background-color:#eaf6ff; border-radius: 10px; padding: 25px;">
        <h2 class="mb-4 text-center text-primary">Order Medicine</h2>

        <form id="orderForm" method="POST">
            @csrf

            <div class="mb-3">
                <label for="medicine_id" class="form-label">Select Medicine:</label>
                <select name="medicine_id" id="medicineSelect" class="form-select" required>
                    <option value="">-- Choose Medicine --</option>
                    @foreach($medicines as $medicine)
                        <option value="{{ $medicine->id }}"
                                data-name="{{ $medicine->name }}"
                                data-price="{{ $medicine->price }}">
                            {{ $medicine->name }} - Rs.{{ $medicine->price }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" id="quantityInput" class="form-control" min="1" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Place Order</button>
        </form>
    </div>
</div>

<!-- Payment Confirmation Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 10px;">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentModalLabel">Confirm Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Medicine:</strong> <span id="modalMedicine"></span></p>
        <p><strong>Quantity:</strong> <span id="modalQuantity"></span></p>
        <p><strong>Total Price:</strong> Rs.<span id="modalTotal"></span></p>
      </div>
      <div class="modal-footer">
        <form id="finalSubmit" action="{{ route('user.order_medicine.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="medicine_id" id="finalMedicine">
            <input type="hidden" name="quantity" id="finalQuantity">
            <button type="submit" class="btn btn-success w-100">Pay & Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (required for modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script to handle modal and transfer form data -->
<script>
document.getElementById('orderForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const select = document.getElementById('medicineSelect');
    const selected = select.options[select.selectedIndex];
    const name = selected.dataset.name;
    const price = selected.dataset.price;
    const quantity = document.getElementById('quantityInput').value;

    if (!selected.value || !quantity) {
        alert("Please fill all fields.");
        return;
    }

    document.getElementById('modalMedicine').textContent = name;
    document.getElementById('modalQuantity').textContent = quantity;
    document.getElementById('modalTotal').textContent = price * quantity;

    document.getElementById('finalMedicine').value = selected.value;
    document.getElementById('finalQuantity').value = quantity;

    var paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
    paymentModal.show();
});
</script>
@endsection
