@extends('layouts.admin')

@section('title', 'Delete Pharmacist')

@section('content')
<div class="container mt-4">
    <h1>Delete Pharmacist (ID: {{ $id }})</h1>
    <form action="{{ route('admin.pharmacist.destroy', $id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this pharmacist?</p>
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
        <a href="{{ route('admin.pharmacist.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
