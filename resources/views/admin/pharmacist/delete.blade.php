@extends('layouts.admin')

@section('title', 'Delete Pharmacist')

@section('content')
    <h1>Delete Pharmacist (ID: {{ $id }})</h1>
    <form action="#" method="POST">
        @csrf
        Are you sure you want to delete this pharmacist?
        <button type="submit">Yes</button>
    </form>
@endsection
