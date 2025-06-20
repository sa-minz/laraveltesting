<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>QuickMeds Pharmacy</title>

  <!-- Bootstrap & Icons -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
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


<!-- Our Story Content -->
<div class="container my-5">
  <h1 class="mb-4 text-primary text-center">Our Story</h1>
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="{{ asset('images/docs.avif') }}" alt="Pharmacy history" class="img-fluid rounded shadow" />
    </div>
    <div class="col-md-6">
      <p>Founded in 2010, QuickMeds Pharmacy started as a small neighborhood store with a big vision: to provide reliable and affordable healthcare solutions to our community. Over the last decade, we've expanded to multiple locations and launched our online platform, making medicines accessible to thousands of families nationwide.</p>
      <p>Our founders believed in the power of compassionate care, personalized service, and continuous innovation. This spirit has driven us to develop educational programs, partner with healthcare professionals, and implement the latest technology to streamline prescription management.</p>
      <p>Today, QuickMeds Pharmacy is proud to be a trusted health partner, committed to improving the quality of life for all our customers.</p>
    </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
    const heading = document.querySelector('h1');
    const image = document.querySelector('.col-md-6 img');
    const paragraphs = document.querySelectorAll('.col-md-6:nth-child(2) p');

    // Setup initial styles for animation
    heading.style.opacity = 0;
    heading.style.transform = 'translateY(-30px)';
    heading.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';

    image.style.opacity = 0;
    image.style.transform = 'translateX(-50px)';
    image.style.transition = 'opacity 1s ease-out, transform 1s ease-out';

    paragraphs.forEach(p => {
      p.style.opacity = 0;
      p.style.transform = 'translateX(50px)';
      p.style.transition = 'opacity 1s ease-out, transform 1s ease-out';
    });

    // Animate heading first
    setTimeout(() => {
      heading.style.opacity = 1;
      heading.style.transform = 'translateY(0)';
    }, 100);

    // Animate image after heading (~900ms)
    setTimeout(() => {
      image.style.opacity = 1;
      image.style.transform = 'translateX(0)';
    }, 1000);

    // Animate paragraphs one by one, staggered, starting after image (~2s)
    paragraphs.forEach((p, index) => {
      setTimeout(() => {
        p.style.opacity = 1;
        p.style.transform = 'translateX(0)';
      }, 2000 + index * 300);
    });
  });
</script>

</body>
</html>

