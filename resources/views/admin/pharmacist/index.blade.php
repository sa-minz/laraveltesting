@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Pharmacists</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.pharmacist.create') }}" class="btn btn-primary mb-3">+ Add New Pharmacist</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>License Number</th>
                <th>Pharmacy Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pharmacists as $pharmacist)
                <tr>
                    <td>{{ $pharmacist->id }}</td>
                    <td>{{ $pharmacist->name }}</td>
                    <td>{{ $pharmacist->phone }}</td>
                    <td>{{ $pharmacist->email }}</td>
                    <td>{{ $pharmacist->license_number }}</td>
                    <td>{{ $pharmacist->pharmacy_name }}</td>
                    <td>
                        <a href="{{ route('admin.pharmacist.edit', $pharmacist->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.pharmacist.destroy', $pharmacist->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete?');">
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
