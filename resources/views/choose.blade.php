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


<!-- Why Choose Us Content -->
<div class="container my-5">
  <h1 class="mb-4 text-primary text-center">Why Choose QuickMeds Pharmacy</h1>
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="{{ asset('images/mission.webp') }}" alt="Why Choose Us" class="img-fluid rounded shadow" />
    </div>
    <div class="col-md-6">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <i class="bi bi-check-circle-fill text-success"></i>
          <strong>Extensive Product Range:</strong> From prescription medicines to health supplements and personal care, we stock everything you need.
        </li>
        <li class="list-group-item">
          <i class="bi bi-check-circle-fill text-success"></i>
          <strong>Experienced Pharmacists:</strong> Our knowledgeable staff are always ready to answer your questions and provide personalized advice.
        </li>
        <li class="list-group-item">
          <i class="bi bi-check-circle-fill text-success"></i>
          <strong>Competitive Prices:</strong> We work hard to offer affordable prices and regular promotions to help you save.
        </li>
        <li class="list-group-item">
          <i class="bi bi-check-circle-fill text-success"></i>
          <strong>Convenient Services:</strong> Fast home delivery, online prescription refills, and easy order tracking.
        </li>
        <li class="list-group-item">
          <i class="bi bi-check-circle-fill text-success"></i>
          <strong>Community Commitment:</strong> We support local health initiatives and regularly host wellness events.
        </li>
      </ul>
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
