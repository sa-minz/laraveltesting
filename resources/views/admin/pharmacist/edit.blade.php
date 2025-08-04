@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Pharmacist</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.pharmacist.update', $pharmacist->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Pharmacist Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $pharmacist->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $pharmacist->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $pharmacist->phone) }}">
        </div>

        <div class="mb-3">
            <label for="license_number" class="form-label">License Number</label>
            <input type="text" name="license_number" class="form-control" value="{{ old('license_number', $pharmacist->license_number) }}">
        </div>

        <div class="mb-3">
            <label for="pharmacy_name" class="form-label">Pharmacy Name</label>
            <input type="text" name="pharmacy_name" class="form-control" value="{{ old('pharmacy_name', $pharmacist->pharmacy_name) }}">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Update Pharmacist</button>
            <a href="{{ route('admin.pharmacist.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
