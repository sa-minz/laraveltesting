<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>QuickMeds Pharmacy</title>

  <!-- Bootstrap & Icons -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Your Custom CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="height:50px; width:auto;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
              <li><a class="dropdown-item" href="{{ url('about') }}">Our Story</a></li>
              <li><a class="dropdown-item" href="{{ url('mission') }}">Our Mission & Vision</a></li>
              <li><a class="dropdown-item" href="{{ url('choose') }}">Why Choose Us</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ url('search') }}">Order Now</a></li>
        </ul>
        <a class="btn btn-outline-light" href="{{ url('/') }}"><i class="bi bi-box-arrow-in-right"></i> Logout</a>
      </div>
    </div>
  </nav>


<!-- Login Form -->
<div class="container py-5" style="max-width: 400px;">
  <h2 class="mb-4 text-center">Login</h2>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
      <label for="usernameInput" class="form-label">Username</label>
      <input
        type="text"
        id="usernameInput"
        name="username"
        class="form-control"
        placeholder="Enter username"
        required
        autofocus
      />
    </div>
    <div class="mb-3">
      <label for="passwordInput" class="form-label">Password</label>
      <input
        type="password"
        id="passwordInput"
        name="password"
        class="form-control"
        placeholder="Password"
        required
      />
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
  </form>
  <p class="mt-3 text-center">
    Don't have an account? <a href="{{ url('/sign') }}">Sign up</a>
  </p>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
