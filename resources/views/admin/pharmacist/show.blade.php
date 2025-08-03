@extends('layouts.admin')

@section('content')
<div class="container mt-4">
  <h3>{{ $pharmacist->name }}</h3>
  <p><strong>Email:</strong> {{ $pharmacist->email }}</p>
  <p><strong>Phone:</strong> {{ $pharmacist->phone }}</p>
  <p><strong>License Number:</strong> {{ $pharmacist->license_number }}</p>
  <p><strong>Pharmacy Name:</strong> {{ $pharmacist->pharmacy_name }}</p>
  <a href="{{ route('admin.pharmacist.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
