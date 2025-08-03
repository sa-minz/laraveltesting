@extends('layouts.admin')

@section('content')
<div class="container mt-4">
  <div class="card shadow rounded">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Edit Pharmacist</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.pharmacist.update', $pharmacist->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" value="{{ old('name', $pharmacist->name) }}" class="form-control" required>
          @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" value="{{ old('email', $pharmacist->email) }}" class="form-control" required>
          @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" name="phone" value="{{ old('phone', $pharmacist->phone) }}" class="form-control" required>
          @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">License Number</label>
          <input type="text" name="license_number" value="{{ old('license_number', $pharmacist->license_number) }}" class="form-control" required>
          @error('license_number') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Pharmacy Name</label>
          <input type="text" name="pharmacy_name" value="{{ old('pharmacy_name', $pharmacist->pharmacy_name) }}" class="form-control" required>
          @error('pharmacy_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">
          <i class="bi bi-save me-1"></i> Update
        </button>
        <a href="{{ route('admin.pharmacist.index') }}" class="btn btn-secondary ms-2">Back</a>
      </form>
    </div>
  </div>
</div>
@endsection
