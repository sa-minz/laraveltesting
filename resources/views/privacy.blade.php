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

<!-- Privacy Policy Content -->
<section class="container my-5">
  <h2 class="text-center mb-4">Privacy Policy</h2>
  <p>
    At QuickMeds Pharmacy, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your personal information when you visit our website.
  </p>

  <h4>Information We Collect</h4>
  <ul>
    <li>Personal information you provide directly, such as your name, email address, and contact details.</li>
    <li>Information collected automatically when you visit our site, including IP address, browser type, and browsing behavior.</li>
  </ul>

  <h4>How We Use Your Information</h4>
  <ul>
    <li>To respond to your inquiries and provide customer support.</li>
    <li>To improve our website and services based on your feedback and usage.</li>
    <li>To send periodic emails and updates, only if you have subscribed.</li>
  </ul>

  <h4>Data Security</h4>
  <p>
    We implement appropriate security measures to protect your data from unauthorized access or disclosure. However, no method of transmission over the internet is 100% secure.
  </p>

  <h4>Cookies</h4>
  <p>
    Our website uses cookies to enhance your browsing experience. You can choose to disable cookies via your browser settings, but this may affect some functionality.
  </p>

  <h4>Your Rights</h4>
  <p>
    You have the right to access, correct, or delete your personal information. To exercise these rights, please contact us using the information provided on the Contact page.
  </p>

  <h4>Changes to This Policy</h4>
  <p>
    We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date.
  </p>

  <p class="text-muted">Last updated: June 2025</p>
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