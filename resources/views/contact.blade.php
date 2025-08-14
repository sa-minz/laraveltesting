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

  <div class="contact-container my-5">
    <h2>Contact QuickMeds Pharmacy</h2>

    <div class="contact-item" id="phone" tabindex="0" role="button" aria-label="Phone number" style="cursor:pointer;">
      <i class="bi bi-telephone-fill"></i>
      <span>0771234556</span>
      <div class="tooltip-text">Click to copy phone number</div>
    </div>

    <div class="contact-item" id="email" tabindex="0" role="button" aria-label="Email address" style="cursor:pointer;">
      <i class="bi bi-envelope-fill"></i>
      <span>support@quickmeds.com</span>
      <div class="tooltip-text">Click to copy email</div>
    </div>

    <div class="contact-item" style="cursor: default;">
      <i class="bi bi-geo-alt-fill"></i>
      <span>No 23, Ward Place, Colombo,Sri Lanka</span>
     </div>
  <!-- Working Hours -->
  <div class="contact-item" style="cursor: default;">
    <i class="bi bi-clock-fill"></i>
    <span>Mon - Sat: 8:00 AM - 10:00 PM</span>
  </div>

  <!-- Social Media -->
  <div class="contact-item" style="cursor:pointer;" tabindex="0" role="button" aria-label="Follow us on Facebook">
    <i class="bi bi-facebook"></i>
    <span>facebook.com/QuickMedsPharmacy</span>
    <div class="tooltip-text">Click to open Facebook page</div>
  </div>

  <div class="contact-item" style="cursor:pointer;" tabindex="0" role="button" aria-label="Follow us on Instagram">
    <i class="bi bi-instagram"></i>
    <span>@quickmeds.lk</span>
    <div class="tooltip-text">Click to open Instagram</div>
  </div>
</div>


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

  <script>
    // Copy to clipboard and show tooltip
    function copyToClipboard(text, elem) {
      navigator.clipboard.writeText(text).then(() => {
        elem.classList.add('tooltip-show');
        setTimeout(() => elem.classList.remove('tooltip-show'), 2000);
      }).catch(() => {
        alert('Failed to copy, please copy manually.');
      });
    }

    document.getElementById('phone').addEventListener('click', () => {
      copyToClipboard('+94771234567', document.getElementById('phone'));
    });
    document.getElementById('email').addEventListener('click', () => {
      copyToClipboard('support@quickmeds.com', document.getElementById('email'));
    });

    // Accessibility: allow keyboard copy on Enter/Space
    ['phone', 'email'].forEach(id => {
      const elem = document.getElementById(id);
      elem.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          elem.click();
        }
      });
    });
  </script>
</body>
</html>
