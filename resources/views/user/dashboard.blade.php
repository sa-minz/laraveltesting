@extends('layouts.user')

@section('content')
<div class="container mt-5">
    <h2 class="text-center fw-bold text-primary mb-4">Welcome to Your Dashboard</h2>

    <div class="row g-4">
        <!-- Total Orders -->
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0 p-3">
                <div class="d-flex align-items-center">
                    <div class="me-3 text-primary fs-3"><i class="bi bi-bag-check-fill"></i></div>
                    <div>
                        <h6 class="mb-0">Total Orders</h6>
                        <h4 class="fw-bold">12</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Orders -->
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0 p-3">
                <div class="d-flex align-items-center">
                    <div class="me-3 text-warning fs-3"><i class="bi bi-hourglass-split"></i></div>
                    <div>
                        <h6 class="mb-0">Pending Orders</h6>
                        <h4 class="fw-bold text-warning">3</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delivered -->
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0 p-3">
                <div class="d-flex align-items-center">
                    <div class="me-3 text-success fs-3"><i class="bi bi-check-circle-fill"></i></div>
                    <div>
                        <h6 class="mb-0">Delivered</h6>
                        <h4 class="fw-bold text-success">9</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cancelled -->
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0 p-3">
                <div class="d-flex align-items-center">
                    <div class="me-3 text-danger fs-3"><i class="bi bi-x-circle-fill"></i></div>
                    <div>
                        <h6 class="mb-0">Cancelled</h6>
                        <h4 class="fw-bold text-danger">1</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Order Summary -->
    <div class="card mt-5 shadow-sm border-0 p-4">
        <h5 class="mb-3 fw-semibold">🧾 Latest Order Summary</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item px-0 py-2"><strong>Order ID:</strong> #ORD2321</li>
            <li class="list-group-item px-0 py-2"><strong>Items:</strong> Paracetamol, Vitamin C, Cough Syrup</li>
            <li class="list-group-item px-0 py-2"><strong>Status:</strong> <span class="badge bg-warning text-dark">Pending</span></li>
            <li class="list-group-item px-0 py-2"><strong>Placed On:</strong> July 30, 2025</li>
        </ul>
    </div>
</div>
@endsection
