@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-5 fw-bold text-success">Monthly Report - June</h2>

    {{-- 🔸 Chart Section --}}
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-center">System Overview</h5>
                    <canvas id="barChart" height="90"></canvas>
                </div>
            </div>
        </div>
    </div>

    {{-- 🔸 Information Cards --}}
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow h-100">
                <div class="card-body">
                    <h6>Active Pharmacists</h6>
                    <h4>{{ rand(3, 10) }}</h4>
                    <small>currently online</small>
                </div>
            </div>
        </div>
      
        <div class="col-md-4">
            <div class="card text-dark bg-warning shadow h-100">
                <div class="card-body">
                    <h6>New Signups</h6>
                    <h4>{{ rand(20, 100) }}</h4>
                    <small>registered this month</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-dark shadow h-100">
                <div class="card-body">
                    <h6>Top Medicine</h6>
                    <h4>Panadol</h4>
                    <small>best selling product</small>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 🔸 Chart.js CDN --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{-- 🔸 Chart Scripts --}}
<script>
    // Bar Chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: ['Users', 'Pharmacists', 'Medicines', 'Orders'],
            datasets: [{
                label: 'Count',
                data: [{{ rand(100, 500) }}, {{ rand(5, 20) }}, {{ rand(100, 300) }}, {{ rand(200, 800) }}],
                backgroundColor: [
                    '#0d6efd', // bootstrap primary (blue)
                    '#dc3545', // bootstrap danger (red)
                    '#198754', // bootstrap success (green)
                    '#ffc107'  // bootstrap warning (yellow)
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: { display: true, text: 'Dashboard Summary' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endsection
