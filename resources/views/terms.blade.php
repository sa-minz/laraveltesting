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
        <a class="btn btn-outline-light" href="{{ url('login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      </div>
    </div>
  </nav>

<!-- Terms of Service Content -->
<section class="container my-5">
  <h2 class="text-center mb-4">Terms Of Service</h2>

  <p>
    Welcome to QuickMeds Pharmacy. By accessing or using our website, you agree to comply with and be bound by the following terms and conditions. Please read them carefully.
  </p>

  <h4>Use of Website</h4>
  <p>
    You agree to use our website only for lawful purposes and in a way that does not infringe on the rights of others or restrict or inhibit anyone else's use and enjoyment of the site.
  </p>

  <h4>Product Information</h4>
  <p>
    We strive to provide accurate information about our products and services. However, we do not guarantee that all information is complete, reliable, or error-free.
  </p>

  <h4>Orders and Payments</h4>
  <p>
    Any orders placed through the website are subject to acceptance and availability. Payments made are processed securely, but we are not responsible for any payment processing delays or failures.
  </p>

  <h4>Limitation of Liability</h4>
  <p>
    QuickMeds Pharmacy shall not be liable for any damages arising from the use or inability to use our website or products, including indirect, incidental, or consequential damages.
  </p>

  <h4>Intellectual Property</h4>
  <p>
    All content on this website, including text, images, logos, and graphics, is the property of QuickMeds Pharmacy and protected by copyright laws.
  </p>

  <h4>Changes to Terms</h4>
  <p>
    We reserve the right to modify these Terms of Service at any time. Updates will be posted on this page with an effective date.
  </p>

  <h4>Governing Law</h4>
  <p>
    These terms shall be governed by and construed in accordance with the laws of the jurisdiction in which QuickMeds Pharmacy operates.
  </p>

  <p>Last updated: June 2025</p>
</section>

 
<!-- Footer -->
<footer class="footer py-3">
  <div class="container text-center text-black">
    <p class="mb-1">© 2024 QuickMeds Pharmacy. All Rights Reserved.</p>
    <a href="{{ url('privacy') }}" class="text-black me-3">Privacy Policy</a>
    <a href="{{ url('terms') }}" class="text-black me-3">Terms of Service</a>
    <a href="{{ url('contact') }}" class="text-black">Contact</a> 
  </div>
</footer>

  <!-- Bootstrap JS Bundle -->
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  
</body>
</html>
