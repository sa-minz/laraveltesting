@extends('layouts.admin')

@section('title', 'Pharmacist List')

@section('content')
   <h3>{{ $pharmacist->name }}</h3>
<p>Email: {{ $pharmacist->email }}</p>

@endsection
