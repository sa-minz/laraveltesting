@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-5 fw-bold text-primary">Admin Dashboard</h2>

    <div class="row g-4">
        <div class="col-md-6 col-xl-3">
            <div class="card card-stat p-3">
                <div class="d-flex align-items-center">
                    <div class="card-icon me-3"><i class="bi bi-cart-plus-fill"></i></div>
                    <div>
                        <h6>New Orders</h6>
                        <h4 class="fw-bold">32</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card card-stat p-3">
                <div class="d-flex align-items-center">
                    <div class="card-icon me-3"><i class="bi bi-exclamation-triangle-fill"></i></div>
                    <div>
                        <h6>Inventory Alerts</h6>
                        <h4 class="fw-bold">6</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card card-stat p-3">
                <div class="d-flex align-items-center">
                    <div class="card-icon me-3"><i class="bi bi-people-fill"></i></div>
                    <div>
                        <h6>Active Pharmacists</h6>
                        <h4 class="fw-bold">12</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card card-stat p-3">
                <div class="d-flex align-items-center">
                    <div class="card-icon me-3"><i class="bi bi-calendar-x-fill"></i></div>
                    <div>
                        <h6>Expiring Medicines</h6>
                        <h4 class="fw-bold">9</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card card-stat p-3">
                <div class="d-flex align-items-center">
                    <div class="card-icon me-3"><i class="bi bi-arrow-down-circle-fill"></i></div>
                    <div>
                        <h6>Low Stock</h6>
                        <h4 class="fw-bold">15</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card card-stat p-3">
                <div class="d-flex align-items-center">
                    <div class="card-icon me-3"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <h6>Today’s Sales</h6>
                        <h4 class="fw-bold">Rs. 12,300</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card card-stat p-3">
                <div class="d-flex align-items-center">
                    <div class="card-icon me-3"><i class="bi bi-flag-fill"></i></div>
                    <div>
                        <h6>Pending Reports</h6>
                        <h4 class="fw-bold">3</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card card-stat p-3">
                <div class="d-flex align-items-center">
                    <div class="card-icon me-3"><i class="bi bi-clock-history"></i></div>
                    <div>
                        <h6>System Uptime</h6>
                        <h4 class="fw-bold">99.8%</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
