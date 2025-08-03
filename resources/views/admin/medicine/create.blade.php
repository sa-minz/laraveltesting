@extends('layouts.admin')

@section('content')
<div class="container mt-4">
  <h2>Add New Medicine</h2>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
  </div>
  @endif

  <form action="{{ route('admin.medicine.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name">Medicine Name *</label>
      <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
      <label for="description">Description</label>
      <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
      <label for="price">Price (Rs.) *</label>
      <input type="number" step="0.01" id="price" name="price" class="form-control" value="{{ old('price') }}" required>
    </div>

    <div class="mb-3">
      <label for="quantity">Quantity *</label>
      <input type="number" id="quantity" name="quantity" class="form-control" value="{{ old('quantity') }}" required>
    </div>

    <div class="mb-3">
      <label for="manufacturer">Manufacturer</label>
      <input type="text" id="manufacturer" name="manufacturer" class="form-control" value="{{ old('manufacturer') }}">
    </div>

    <div class="mb-3">
      <label for="expiry_date">Expiry Date</label>
      <input type="date" id="expiry_date" name="expiry_date" class="form-control" value="{{ old('expiry_date') }}">
    </div>

    <button type="submit" class="btn btn-primary">Add Medicine</button>
    <a href="{{ route('admin.medicine.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection
