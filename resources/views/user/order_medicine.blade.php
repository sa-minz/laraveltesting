@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Order Medicine</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('user.order_medicine.submit') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="medicine_id" class="form-label">Select Medicine:</label>
            <select name="medicine_id" id="medicine_id" class="form-select" required>
                <option value="">-- Select --</option>
                @foreach($medicines as $medicine)
                    <option value="{{ $medicine->id }}">
                        {{ $medicine->name }} (Rs.{{ $medicine->price }}) - Stock: {{ $medicine->quantity }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
</div>
@endsection
