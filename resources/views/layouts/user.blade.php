<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Dashboard</title>

  <!-- Bootstrap 5 (local) -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons (local) -->
  <link href="/webfonts/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(to right, #a8edf6, #ffffff);
      font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      margin: 0;
      color: #0c1f32;
    }

    .sidebar {
      width: 240px;
      height: 100vh;
      background: white;
      padding-top: 30px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 3px 0 15px rgba(0, 64, 133, 0.1);
      transition: all 0.3s ease;
    }

    .sidebar h4 {
      color: #004085;
      font-weight: 700;
      margin-bottom: 30px;
      text-align: center;
      letter-spacing: 1.1px;
    }

    .sidebar a {
      color: #004085;
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
      background-color: #0d6efd;
      color: white;
      box-shadow: 0 3px 8px rgba(13, 110, 253, 0.5);
    }

    .sidebar hr {
      border-color: rgba(0, 64, 133, 0.1);
      margin: 30px 16px 20px 16px;
    }

    .flex-grow-1 {
      display: flex;
      flex-direction: column;
      background-color: #ffffff;
      min-height: 100vh;
      box-shadow: inset 0 0 10px rgba(0, 64, 133, 0.05);
    }

    .topbar {
      padding: 20px 40px;
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.98) 0%, rgba(227, 242, 253, 0.95) 100%);
      color: #004085;
      font-weight: 700;
      font-size: 1.5rem;
      box-shadow: 0 2px 6px rgba(0, 64, 133, 0.15);
      user-select: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .content-area {
      padding: 40px;
      flex-grow: 1;
      overflow-y: auto;
      background: #f0f9ff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 64, 133, 0.1);
      margin: 20px;
    }

    /* Scrollbar styling */
    .content-area::-webkit-scrollbar {
      width: 8px;
    }
    .content-area::-webkit-scrollbar-thumb {
      background-color: #0d6efd;
      border-radius: 20px;
    }
    .content-area::-webkit-scrollbar-track {
      background: transparent;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .sidebar {
            width: 200px;
        }
        
        .sidebar a {
            padding: 10px 16px;
            margin: 6px 10px;
            font-size: 0.9rem;
        }
        
        .topbar {
            padding: 15px 20px;
            font-size: 1.2rem;
        }
        
        .content-area {
            padding: 20px;
            margin: 10px;
        }
    }

    @media (max-width: 768px) {
        .d-flex {
            flex-direction: column;
        }
        
        .sidebar {
            width: 100%;
            height: auto;
            padding-top: 15px;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 64, 133, 0.1);
        }
        
        .sidebar > div {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }
        
        .sidebar h4 {
            width: 100%;
            margin-bottom: 15px;
        }
        
        .sidebar a {
            margin: 4px 8px;
            padding: 8px 12px;
        }
        
        .sidebar hr {
            display: none;
        }
        
        .topbar {
            padding: 12px 15px;
            font-size: 1.1rem;
        }
        
        .content-area {
            padding: 15px;
            margin: 8px;
        }
    }

    @media (max-width: 576px) {
        .topbar {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        .sidebar a {
            font-size: 0.85rem;
            padding: 6px 10px;
        }
        
        .sidebar a i {
            margin-right: 8px;
            font-size: 1rem;
        }
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <div class="sidebar">
      <div>
        <h4>User Panel</h4>
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
    </div>

    <div class="flex-grow-1 d-flex flex-column">
      <div class="topbar">
        <div>Welcome, {{ Auth::user()->name }}</div>
        <div>
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
             class="btn btn-outline-primary btn-sm">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>

      <div class="content-area flex-grow-1">
        @yield('content')
      </div>
    </div>
  </div>
  
  <script src="/js/bootstrap.bundle.min.js"></script>
  @yield('scripts')
</body>
</html>