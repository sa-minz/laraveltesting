<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Dashboard - Pharmacy</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(to right, #d0e7f9, #ffffff);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      margin: 0;
    }

    .sidebar {
      width: 240px;
      height: 100vh;
      background-color: #bee3f8;
      padding-top: 30px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 3px 0 10px rgba(190, 227, 248, 0.5);
    }

    .sidebar h4 {
      color: #1e3a8a;
      font-weight: 700;
      margin-bottom: 30px;
      text-align: center;
      letter-spacing: 1.1px;
    }

    .sidebar a {
      color: #1e40af;
      padding: 12px 24px;
      display: block;
      text-decoration: none;
      font-weight: 600;
      border-radius: 8px;
      margin: 6px 16px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .sidebar a i {
      margin-right: 12px;
      font-size: 1.2rem;
      vertical-align: middle;
    }

    .sidebar a:hover,
    .sidebar .active {
      background-color: #93c5fd;
      color: #1e40af;
      box-shadow: 0 3px 8px rgba(147, 197, 253, 0.6);
    }

    .sidebar hr {
      border-color: rgba(30, 64, 175, 0.2);
      margin: 30px 16px 20px 16px;
    }

    .sidebar .logout {
      margin: 20px 16px;
      padding: 12px 24px;
      background-color: #3b82f6;
      color: #e0e7ff;
      font-weight: 700;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(59, 130, 246, 0.5);
      transition: background-color 0.3s ease;
    }

    .sidebar .logout:hover {
      background-color: #2563eb;
      color: #dbeafe;
      box-shadow: 0 6px 12px rgba(37, 99, 235, 0.7);
    }

    .flex-grow-1 {
      display: flex;
      flex-direction: column;
      background-color: #f0f9ff;
      min-height: 100vh;
    }

    .topbar {
      padding: 20px 40px;
      background-color: #dbeafe;
      color: #1e3a8a;
      font-weight: 700;
      font-size: 1.5rem;
      box-shadow: 0 2px 6px rgba(30, 58, 138, 0.15);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .content-area {
      padding: 40px;
      flex-grow: 1;
      overflow-y: auto;
    }

    .welcome-box {
      background-color: #e0f2fe;
      padding: 20px 30px;
      border-radius: 10px;
      margin-bottom: 30px;
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .welcome-box i {
      font-size: 2.5rem;
      color: #0ea5e9;
    }

    .notice-box {
      background: #fffbe6;
      border-left: 5px solid #facc15;
      padding: 15px 20px;
      margin-bottom: 30px;
      border-radius: 8px;
      font-size: 0.95rem;
      color: #92400e;
    }

    footer {
      text-align: center;
      padding: 12px;
      background-color: #e0f2fe;
      color: #475569;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <div class="sidebar">
      <div>
        <h4>User Panel</h4>
        <a href="{{ route('user.order_medicine') }}" class="{{ request()->is('user/order-medicine*') ? 'active' : '' }}">
          <i class="bi bi-basket3"></i> Order Medicine
        </a>
        <a href="{{ route('user.view_orders') }}" class="{{ request()->is('user/view-orders*') ? 'active' : '' }}">
          <i class="bi bi-card-checklist"></i> View Orders
        </a>
        <a href="{{ route('user.order_history') }}" class="{{ request()->is('user/order-history*') ? 'active' : '' }}">
          <i class="bi bi-clock-history"></i> Order History
        </a>
      </div>

      <div>
        <hr />
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="logout">
          <i class="bi bi-box-arrow-right"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>

    <div class="flex-grow-1">
      <div class="topbar">
        <div>Hello, {{ Auth::user()->name }}</div>
        <div><i class="bi bi-capsule"></i> QuickMeds Pharmacy</div>
      </div>

      <div class="content-area">
        <!-- Welcome Message -->
        <div class="welcome-box">
          <i class="bi bi-emoji-smile"></i>
          <div>
            <h5 class="mb-1">Welcome back to QuickMeds, {{ Auth::user()->name }}!</h5>
            <p class="mb-0">We’re here to help you stay healthy and happy. Place your orders with just a few clicks!</p>
          </div>
        </div>

        <!-- Important Notice or Promotion -->
        <div class="notice-box">
          🚨 <strong>Notice:</strong> Enjoy 10% off on all diabetes-related medicines this week! Offer ends soon.
        </div>

        <!-- Quick Stats Section -->
        <div class="row g-4 mb-4">
          <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
              <h6>Total Orders</h6>
              <h4 class="text-primary">12</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
              <h6>Pending Orders</h6>
              <h4 class="text-warning">3</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
              <h6>Delivered Orders</h6>
              <h4 class="text-success">9</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
              <h6>Cancelled Orders</h6>
              <h4 class="text-danger">1</h4>
            </div>
          </div>
        </div>

        <!-- Example Recent Order Summary -->
        <div class="card p-4 shadow-sm mb-4">
          <h5 class="mb-3">🧾 Latest Order Summary</h5>
          <p><strong>Order ID:</strong> #ORD2321</p>
          <p><strong>Items:</strong> Paracetamol, Vitamin C, Cough Syrup</p>
          <p><strong>Status:</strong> <span class="badge bg-warning text-dark">Pending</span></p>
          <p><strong>Placed On:</strong> July 30, 2025</p>
        </div>

        @yield('content')
      </div>

      <footer>
        &copy; {{ date('Y') }} QuickMeds. All rights reserved.
      </footer>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @yield('scripts')
</body>
</html>
