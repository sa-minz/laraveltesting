<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Customer Dashboard - QuickMeds</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="logo.jpeg" alt="Logo" style="height:50px; width:auto;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">About Us</a>
          <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
            <li><a class="dropdown-item" href="{{ url('/about') }}">Our Story</a></li>
            <li><a class="dropdown-item" href="{{ url('/mission') }}">Our Mission & Vision</a></li>
            <li><a class="dropdown-item" href="{{ url('/choose') }}">Why Choose Us</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/search') }}">Search Medicine</a></li>
      </ul>
      <!-- ✅ Logout Button -->
      <a class="btn btn-outline-light" href="{{ url('/logout') }}">
        <i class="bi bi-box-arrow-left"></i> Logout
      </a>
    </div>
  </div>
</nav>

<!-- Dashboard Welcome Section -->
<div class="container py-5">
  <h2 class="text-center mb-4">Welcome, <span class="text-primary">Customer</span>!</h2>
  <p class="text-center">Here you can manage your orders, track prescriptions, and update your profile.</p>

  <div class="row mt-5 g-4">
    <div class="col-md-4">
      <div class="card h-100">
        <img src="img/order-history.jpg" class="card-img-top" alt="Order History" />
        <div class="card-body">
          <h5 class="card-title">Order History</h5>
          <p class="card-text">View your previous orders and track ongoing shipments.</p>
          <a href="{{ url('/orders') }}" class="btn btn-primary">View Orders</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="img/prescription.jpg" class="card-img-top" alt="Prescriptions" />
        <div class="card-body">
          <h5 class="card-title">Prescriptions</h5>
          <p class="card-text">Upload or manage your medical prescriptions securely.</p>
          <a href="{{ url('/prescriptions') }}" class="btn btn-primary">Manage</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="img/profile.jpg" class="card-img-top" alt="Profile" />
        <div class="card-body">
          <h5 class="card-title">Profile Settings</h5>
          <p class="card-text">Update your personal information and change your password.</p>
          <a href="{{ url('/profile') }}" class="btn btn-primary">Edit Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer text-white py-3">
  <div class="container text-center">
    <p class="mb-1">© 2024 QuickMeds Pharmacy. All Rights Reserved.</p>
    <a href="{{ url('/privacy') }}" class="text-white me-3">Privacy Policy</a>
    <a href="{{ url('/terms') }}" class="text-white me-3">Terms of Service</a>
    <a href="{{ url('/contact') }}" class="text-white">Contact</a> 
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
