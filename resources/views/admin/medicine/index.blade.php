@extends('layouts.admin')

@section('content')
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Manage Medicines</h2>
    <a href="{{ route('admin.medicine.create') }}" class="btn btn-success">
      <i class="bi bi-plus-circle"></i> Add New Medicine
    </a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="table-responsive">
    <table class="table table-bordered align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Manufacturer</th>
          <th>Expiry Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($medicines as $medicine)
        <tr>
          <td>{{ $medicine->id }}</td>
          <td>{{ $medicine->name }}</td>
          <td>{{ $medicine->description ?? '-' }}</td>
          <td>Rs. {{ number_format($medicine->price, 2) }}</td>
          <td>{{ $medicine->quantity }}</td>
          <td>{{ $medicine->manufacturer ?? '-' }}</td>
          <td>{{ $medicine->expiry_date ? \Carbon\Carbon::parse($medicine->expiry_date)->format('d M Y') : '-' }}</td>
          <td>
            <a href="{{ route('admin.medicine.show', $medicine->id) }}" class="btn btn-info btn-sm" title="View">
              <i class="bi bi-eye"></i>
            </a>
            <a href="{{ route('admin.medicine.edit', $medicine->id) }}" class="btn btn-warning btn-sm" title="Edit">
              <i class="bi bi-pencil-square"></i>
            </a>
            <form action="{{ route('admin.medicine.destroy', $medicine->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this medicine?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" title="Delete">
                <i class="bi bi-trash"></i>
              </button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="8">No medicines found.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
