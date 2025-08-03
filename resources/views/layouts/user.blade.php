<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Dashboard</title>

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
      background-color: #bee3f8; /* pastel light blue */
      padding-top: 30px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 3px 0 10px rgba(190, 227, 248, 0.5);
    }

    .sidebar h4 {
      color: #1e3a8a; /* deeper blue for contrast */
      font-weight: 700;
      margin-bottom: 30px;
      text-align: center;
      letter-spacing: 1.1px;
    }

    .sidebar a {
      color: #1e40af; /* dark blue */
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
      background-color: #93c5fd; /* lighter pastel blue */
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
      background-color: #3b82f6; /* bright pastel blue */
      color: #e0e7ff;
      font-weight: 700;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(59, 130, 246, 0.5);
      transition: background-color 0.3s ease;
    }

    .sidebar .logout:hover {
      background-color: #2563eb; /* slightly darker blue */
      color: #dbeafe;
      box-shadow: 0 6px 12px rgba(37, 99, 235, 0.7);
    }

    .flex-grow-1 {
      display: flex;
      flex-direction: column;
      background-color: #f0f9ff; /* very light pastel blue */
      min-height: 100vh;
    }

    .topbar {
      padding: 20px 40px;
      background-color: #dbeafe; /* pastel blue */
      color: #1e3a8a; /* deep blue */
      font-weight: 700;
      font-size: 1.5rem;
      box-shadow: 0 2px 6px rgba(30, 58, 138, 0.15);
      user-select: none;
    }

    .content-area {
      padding: 40px;
      flex-grow: 1;
      overflow-y: auto;
    }

    .content-area::-webkit-scrollbar {
      width: 8px;
    }
    .content-area::-webkit-scrollbar-thumb {
      background-color: #93c5fd;
      border-radius: 20px;
    }
    .content-area::-webkit-scrollbar-track {
      background: transparent;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <div class="sidebar">
      <div>
        <h4>Dashboard</h4>

        <a href="{{ route('user.order_medicine') }}" class="{{ request()->is('user/order-medicine') ? 'active' : '' }}">
          <i class="bi bi-basket"></i> Order Medicine
        </a>

        <a href="{{ route('user.view_orders') }}" class="{{ request()->is('user/view-orders') ? 'active' : '' }}">
          <i class="bi bi-list-check"></i> View Orders
        </a>

        <a href="{{ route('user.order_history') }}" class="{{ request()->is('user/order-history') ? 'active' : '' }}">
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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
          @csrf
        </form>
      </div>
    </div>

    <div class="flex-grow-1">
      <div class="topbar">
        User Dashboard
      </div>
      <div class="content-area">
        @yield('content')
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @yield('scripts')
</body>
</html>
