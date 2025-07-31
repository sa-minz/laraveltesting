@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-5 fw-bold text-success">📊 Monthly Report - June</h2>

    {{-- 🔸 Chart Section --}}
    <div class="row mb-5">
        <div class="col-lg-6 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-center">System Overview</h5>
                    <canvas id="barChart" height="90"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-center">Quarterly Sales</h5>
                    <canvas id="pieChart" height="70"></canvas> {{-- 🔸 Reduced height --}}
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
            <div class="card text-white bg-danger shadow h-100">
                <div class="card-body">
                    <h6>Pending Orders</h6>
                    <h4>{{ rand(10, 50) }}</h4>
                    <small>awaiting confirmation</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success shadow h-100">
                <div class="card-body">
                    <h6>Monthly Revenue</h6>
                    <h4>LKR {{ rand(50000, 200000) }}</h4>
                    <small>generated in June</small>
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
                backgroundColor: ['#38a169', '#319795', '#63b3ed', '#4FD1C5']
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

    // Pie Chart
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            datasets: [{
                data: [{{ rand(2000, 6000) }}, {{ rand(3000, 7000) }}, {{ rand(4000, 8000) }}, {{ rand(5000, 9000) }}],
                backgroundColor: ['#48bb78', '#81e6d9', '#68d391', '#b2f5ea'] // pharmacy colors
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                },
                title: {
                    display: true,
                    text: 'Quarterly Sales Overview'
                }
            }
        }
    });
</script>
@endsection
