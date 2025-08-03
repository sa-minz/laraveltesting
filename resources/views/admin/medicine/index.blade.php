@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Medicines</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.medicine.create') }}" class="btn btn-primary mb-3">+ Add New Medicine</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price (Rs.)</th>
                <th>Quantity</th>
                <th>Manufacturer</th>
                <th>Expiry Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicines as $medicine)
                <tr>
                    <td>{{ $medicine->id }}</td>
                    <td>{{ $medicine->name }}</td>
                    <td>{{ $medicine->description ?? '-' }}</td>
                    <td>{{ number_format($medicine->price, 2) }}</td>
                    <td>{{ $medicine->quantity }}</td>
                    <td>{{ $medicine->manufacturer ?? '-' }}</td>
                    <td>{{ $medicine->expiry_date ? \Carbon\Carbon::parse($medicine->expiry_date)->format('d M Y') : '-' }}</td>
                    <td>
                        <a href="{{ route('admin.medicine.show', $medicine->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('admin.medicine.edit', $medicine->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.medicine.destroy', $medicine->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
