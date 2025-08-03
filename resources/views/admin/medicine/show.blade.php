@extends('layouts.admin')

@section('content')
<div class="container mt-4">
  <h2>Medicine Details</h2>

  <table class="table table-bordered">
    <tr>
      <th>Name</th>
      <td>{{ $medicine->name }}</td>
    </tr>
    <tr>
      <th>Description</th>
      <td>{{ $medicine->description ?? '-' }}</td>
    </tr>
    <tr>
      <th>Price (Rs.)</th>
      <td>{{ number_format($medicine->price, 2) }}</td>
    </tr>
    <tr>
      <th>Quantity</th>
      <td>{{ $medicine->quantity }}</td>
    </tr>
    <tr>
      <th>Manufacturer</th>
      <td>{{ $medicine->manufacturer ?? '-' }}</td>
    </tr>
    <tr>
      <th>Expiry Date</th>
      <td>{{ $medicine->expiry_date ? \Carbon\Carbon::parse($medicine->expiry_date)->format('d M Y') : '-' }}</td>
    </tr>
  </table>

  <a href="{{ route('admin.medicine.index') }}" class="btn btn-secondary">Back to list</a>
  <a href="{{ route('admin.medicine.edit', $medicine->id) }}" class="btn btn-warning">Edit</a>
</div>
@endsection
