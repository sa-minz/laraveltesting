@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Add New Pharmacist</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.pharmacist.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Pharmacist Name</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" required value="{{ old('phone') }}">
        </div>

        <div class="mb-3">
            <label for="license_number" class="form-label">License Number</label>
            <input type="text" name="license_number" class="form-control" required value="{{ old('license_number') }}">
        </div>

        <div class="mb-3">
            <label for="pharmacy_name" class="form-label">Pharmacy Name</label>
            <input type="text" name="pharmacy_name" class="form-control" required value="{{ old('pharmacy_name') }}">
        </div>

        <button type="submit" class="btn btn-success">Save Pharmacist</button>
    </form>
</div>
@endsection
