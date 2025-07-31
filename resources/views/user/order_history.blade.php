@extends('layouts.user')

@section('content')
    <div class="container mt-5">
        <h2>Order History</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fake static data -->
                <tr>
                    <td>ORD12345</td>
                    <td>2025-07-30</td>
                    <td>$49.99</td>
                    <td>Paid</td>
                    <td>Delivered on time</td>
                </tr>
                <tr>
                    <td>ORD12346</td>
                    <td>2025-07-28</td>
                    <td>$89.50</td>
                    <td>Pending</td>
                    <td>Processing order</td>
                </tr>
                <tr>
                    <td>ORD12347</td>
                    <td>2025-07-25</td>
                    <td>$120.00</td>
                    <td>Cancelled</td>
                    <td>Customer cancelled</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
