@extends('admin.dashboard')

@section('content')
<div class="container mt-4">
  <div class="card shadow rounded">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Edit Pharmacist</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.pharmacist.update', $pharmacist->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" value="{{ $pharmacist->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" value="{{ $pharmacist->email }}" class="form-control" required>
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
