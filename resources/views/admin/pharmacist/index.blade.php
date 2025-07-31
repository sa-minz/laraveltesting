@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Pharmacist List</h2>
    <a href="{{ route('admin.pharmacist.create') }}" class="btn btn-success">
      <i class="bi bi-plus-circle"></i> Add New Pharmacist
    </a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive">
    <table class="table table-bordered align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($pharmacists as $pharmacist)
        <tr>
          <td>{{ $pharmacist->id }}</td>
          <td>{{ $pharmacist->name }}</td>
          <td>{{ $pharmacist->email }}</td>
          <td>{{ $pharmacist->phone }}</td>
          <td>
            <a href="{{ route('admin.pharmacist.show', $pharmacist->id) }}" class="btn btn-info btn-sm">
              <i class="bi bi-eye"></i>
            </a>
            <a href="{{ route('admin.pharmacist.edit', $pharmacist->id) }}" class="btn btn-warning btn-sm">
              <i class="bi bi-pencil-square"></i>
            </a>
            <form action="{{ route('admin.pharmacist.destroy', $pharmacist->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this pharmacist?')">
                <i class="bi bi-trash"></i>
              </button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5">No pharmacists found.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
