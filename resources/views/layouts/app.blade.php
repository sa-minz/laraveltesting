@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h2>Order Medicine</h2>

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <form action="{{ route('user.order_medicine.submit') }}" method="POST" novalidate>
    @csrf

    <div class="mb-3">
      <label for="medicine_id" class="form-label">Select Medicine</label>
      <select name="medicine_id" id="medicine_id" class="form-select @error('medicine_id') is-invalid @enderror" required>
        <option value="">-- Choose Medicine --</option>
        @foreach($medicines as $medicine)
          <option value="{{ $medicine->id }}" {{ old('medicine_id') == $medicine->id ? 'selected' : '' }}>
            {{ $medicine->name }} - ${{ number_format($medicine->price, 2) }}
          </option>
        @endforeach
      </select>
      @error('medicine_id')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity</label>
      <input type="number" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" min="1" value="{{ old('quantity', 1) }}" required />
      @error('quantity')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <hr>

    <h5>Payment Details</h5>

    <div class="mb-3">
      <label for="card_number" class="form-label">Card Number</label>
      <input type="text" name="card_number" id="card_number" class="form-control @error('card_number') is-invalid @enderror" value="{{ old('card_number') }}" required />
      @error('card_number')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="expiry_date" class="form-label">Expiry Date (MM/YY)</label>
      <input type="text" name="expiry_date" id="expiry_date" class="form-control @error('expiry_date') is-invalid @enderror" value="{{ old('expiry_date') }}" placeholder="MM/YY" required />
      @error('expiry_date')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="cvv" class="form-label">CVV</label>
      <input type="text" name="cvv" id="cvv" class="form-control @error('cvv') is-invalid @enderror" value="{{ old('cvv') }}" required />
      @error('cvv')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Place Order</button>
  </form>
</div>


@endsection
