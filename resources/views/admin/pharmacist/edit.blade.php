<!-- resources/views/admin/pharmacist/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Pharmacist</h1>

    <form action="{{ route('admin.pharmacist.update', $pharmacist->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $pharmacist->name) }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $pharmacist->email) }}" required><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone', $pharmacist->phone) }}"><br>

        <label>License Number:</label>
        <input type="text" name="license_number" value="{{ old('license_number', $pharmacist->license_number) }}"><br>

        <label>Pharmacy Name:</label>
        <input type="text" name="pharmacy_name" value="{{ old('pharmacy_name', $pharmacist->pharmacy_name) }}"><br>

        <button type="submit">Update</button>
    </form>
@endsection
