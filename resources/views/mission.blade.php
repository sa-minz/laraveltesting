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

<!-- Mission & Vision Content -->
<div class="container my-5">
  <h1 class="mb-4 text-primary text-center">Our Mission & Vision</h1>
  <div class="row align-items-center">
    <!-- Video Column (Left Side) -->
    <div class="col-md-6 mb-3">
      <video controls class="img-fluid rounded shadow" style="width:100%; height:auto;">
        <source src="{{ asset('doc.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>
    <!-- Text Content Column (Right Side) -->
    <div class="col-md-6">
      <h3>Mission</h3>
      <p>
        Our mission is to ensure that every individual has access to safe, effective, and affordable medications.
        We strive to provide excellent customer service, expert health advice, and innovative solutions that promote wellbeing.
      </p>
      <h3>Vision</h3>
      <p>
        To become the leading pharmacy in the region recognized for our integrity, quality, and dedication to community health.
        We envision a future where healthcare is convenient, personalized, and empowering for all.
      </p>
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
