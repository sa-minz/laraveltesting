@extends('layouts.admin')

@section('content')
<div class="container py-4 max-w-xl">
    <h2 class="text-2xl font-bold mb-4">Edit Medicine</h2>

    <form method="POST" action="{{ route('admin.medicine.update', $medicine->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $medicine->name }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label>Description:</label>
            <textarea name="description" class="w-full border px-3 py-2 rounded">{{ $medicine->description }}</textarea>
        </div>

        <div class="mb-4">
            <label>Price:</label>
            <input type="number" step="0.01" name="price" value="{{ $medicine->price }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label>Quantity:</label>
            <input type="number" name="quantity" value="{{ $medicine->quantity }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label>Manufacturer:</label>
            <input type="text" name="manufacturer" value="{{ $medicine->manufacturer }}" class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-4">
            <label>Expiry Date:</label>
            <input type="date" name="expiry_date" value="{{ $medicine->expiry_date }}" class="w-full border px-3 py-2 rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Update
        </button>
    </form>
</div>
@endsection
