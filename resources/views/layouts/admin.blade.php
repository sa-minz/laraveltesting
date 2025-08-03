<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

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

.sidebar .logout {
  margin: 20px 16px;
  padding: 12px 24px;
  background-color: #0d6efd;
  color: white;
  font-weight: 700;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(13, 110, 253, 0.5);
  transition: background-color 0.3s ease;
}

.sidebar .logout:hover {
  background-color: #007bff;
  box-shadow: 0 6px 12px rgba(0, 123, 255, 0.7);
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
}

.content-area {
  padding: 40px;
  flex-grow: 1;
  overflow-y: auto;
  background: #f0f9ff;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 64, 133, 0.1);
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

  </style>
</head>

 <body>
  <div class="d-flex">
    <div class="sidebar">
      <div>
        <h4>Dashboard</h4>
        <a href="{{ route('admin.pharmacist.index') }}" class="{{ request()->is('admin/pharmacist*') ? 'active' : '' }}">
          <i class="bi bi-person-circle"></i> Manage Pharmacists
        </a>
        <a href="{{ route('admin.medicine.index') }}" class="{{ request()->is('admin/medicine*') ? 'active' : '' }}">
          <i class="bi bi-capsule"></i> Manage Medicines
        </a>
        <a href="{{ route('admin.report.index') }}" class="{{ request()->is('admin/report*') ? 'active' : '' }}">
          <i class="bi bi-bar-chart-line"></i> View Reports
        </a>
      </div>
    </div>

    <div class="flex-grow-1 d-flex flex-column">
      <div class="topbar d-flex justify-content-between align-items-center px-4">
        <div>Welcome Admin!</div>
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
</body>

</html>
