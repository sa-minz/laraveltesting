@extends('layouts.user')

@section('content')
<div class="container my-5" style="max-width: 800px;">
    <h2 class="text-primary mb-4">Order Medicine</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($medicines->isEmpty())
        <p>No medicines available for ordering.</p>
    @else
        <div class="card p-4">
            <form method="POST" action="{{ route('user.order_medicine.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="medicine_id" class="form-label">Select Medicine:</label>
                    <select name="medicine_id" id="medicine_id" class="form-select" required>
                        <option value="">-- Choose Medicine --</option>
                        @foreach($medicines as $medicine)
                            <option value="{{ $medicine->id }}" 
                                    data-price="{{ $medicine->price }}">
                                {{ $medicine->name }} - Rs.{{ number_format($medicine->price, 2) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Unit Price:</label>
                    <div id="unitPrice">Rs. 0.00</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total Price:</label>
                    <div id="totalPrice">Rs. 0.00</div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Place Order</button>
            </form>
        </div>
    @endif
</div>

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const medicineSelect = document.getElementById('medicine_id');
    const quantityInput = document.getElementById('quantity');
    const unitPriceDisplay = document.getElementById('unitPrice');
    const totalPriceDisplay = document.getElementById('totalPrice');

    // Update prices when medicine or quantity changes
    function updatePrices() {
        const selectedOption = medicineSelect.options[medicineSelect.selectedIndex];
        const price = selectedOption ? parseFloat(selectedOption.getAttribute('data-price')) : 0;
        const quantity = parseInt(quantityInput.value) || 0;
        
        unitPriceDisplay.textContent = `Rs. ${price.toFixed(2)}`;
        totalPriceDisplay.textContent = `Rs. ${(price * quantity).toFixed(2)}`;
    }

    medicineSelect.addEventListener('change', updatePrices);
    quantityInput.addEventListener('input', updatePrices);
});
</script>
@endsection
@endsection