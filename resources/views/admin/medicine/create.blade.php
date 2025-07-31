@extends('layouts.admin')

@section('content')
<div class="container">
  <h2 class="mb-4">Add New Medicine</h2>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('admin.medicine.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Medicine Name *</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price (Rs.) *</label>
      <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
    </div>

    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity *</label>
      <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
    </div>

    <div class="mb-3">
      <label for="manufacturer" class="form-label">Manufacturer</label>
      <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ old('manufacturer') }}">
    </div>

    <div class="mb-3">
      <label for="expiry_date" class="form-label">Expiry Date</label>
      <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{ old('expiry_date') }}">
    </div>

    <button type="submit" class="btn btn-primary">Add Medicine</button>
    <a href="{{ route('admin.medicine.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection
