<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>QuickMeds Pharmacy</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
          <li class="nav-item"><a class="nav-link" href="{{ url('search') }}">Search Medicine</a></li>
        </ul>
        <a class="btn btn-outline-light" href="{{ url('login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      </div>
    </div>
  </nav>


<!-- Sign Up Form -->
<div class="container py-5" style="max-width: 400px;">
  <h2 class="mb-4 text-center">Create Your Account</h2>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3">
      <label for="newUsername" class="form-label">Username</label>
      <input type="text" name="username" id="newUsername" class="form-control" placeholder="Enter username" required />
    </div>
    <div class="mb-3">
      <label for="newEmail" class="form-label">Email address</label>
      <input type="email" name="email" id="newEmail" class="form-control" placeholder="Enter email" required />
    </div>
    <div class="mb-3">
      <label for="newPassword" class="form-label">Password</label>
      <input type="password" name="password" id="newPassword" class="form-control" placeholder="Password" required />
    </div>
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm Password</label>
      <input type="password" name="password_confirmation" id="confirmPassword" class="form-control" placeholder="Confirm Password" required />
    </div>
    <button type="submit" class="btn btn-primary w-100">Sign Up</button>
  </form>
  <p class="mt-3 text-center">
    Already have an account? <a href="{{ url('/login') }}">Login here</a>
  </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
