@extends('admin.dashboard')

@section('content')
<div class="container mt-4">
  <div class="card shadow rounded">
    <div class="card-header bg-success text-white">
      <h4 class="mb-0">Add New Pharmacist</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.pharmacist.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>

        
        <div class="mb-3">
          <label class="form-label">Contact No:</label>
          <input type="text" name="contact" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">
          <i class="bi bi-check-circle me-1"></i> Save
        </button>
        <a href="{{ route('admin.pharmacist.index') }}" class="btn btn-secondary ms-2">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection
