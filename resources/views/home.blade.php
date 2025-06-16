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

  <!-- Full Width Carousel -->
  <div class="container-fluid p-0">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="{{ asset('images/pharmacist.jpg') }}" class="d-block w-100" alt="Pharmacist Helping Customer" />
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5>Welcome to QuickMeds Pharmacy</h5>
            <p>Your trusted health partner with quality care.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="{{ asset('images/place.jpg') }}" class="d-block w-100" alt="Medicine Shelf" />
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5>Wide Range of Medicines</h5>
            <p>Find the medicines you need quickly and easily.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="{{ asset('images/online.webp') }}" class="d-block w-100" alt="Online Pharmacy Services" />
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5>Online Ordering & 24/7 Support</h5>
            <p>Get your medicines delivered at your doorstep anytime.</p>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
          <img src="{{ asset('images/happy.jpg') }}" class="d-block w-100" alt="Happy Customer" />
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5>Health & Wellness</h5>
            <p>Join thousands of happy customers living healthier lives.</p>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- New Arrivals Section - medicine -->
  <div class="container my-4">
    <h2 class="mb-4">New Arrivals</h2>
    <div class="row">

      <!-- Dolo 650 (Paracetamol) -->
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('images/img1.jpg') }}" 
               class="card-img-top" 
               alt="Dolo 650" 
               style="width: 100%; max-height: 150px; object-fit: contain;" />
          <div class="card-body">
            <h5 class="card-title">Dolo 650 (Paracetamol)</h5>
            <p class="card-text">Price 120.00 LKR</p>
          </div>
        </div>
      </div>

      <!-- Crocin Cold & Flu -->
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('images/img2.webp') }}" 
               class="card-img-top" 
               alt="Crocin Cold & Flu" 
               style="width: 100%; max-height: 150px; object-fit: contain;" />
          <div class="card-body">
            <h5 class="card-title">Crocin Cold & Flu</h5>
            <p class="card-text">Price 150.00 LKR</p>
          </div>
        </div>
      </div>

      <!-- Liv52 (Liver Tonic) -->
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('images/img3.webp') }}" 
               class="card-img-top" 
               alt="Liv52" 
               style="width: 100%; max-height: 150px; object-fit: contain;" />
          <div class="card-body">
            <h5 class="card-title">Liv52 (Liver Tonic)</h5>
            <p class="card-text">Price 180.00 LKR</p>
          </div>
        </div>
      </div>

      <!-- Zincovit (Multivitamin) -->
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('images/img4.jpg') }}" 
               class="card-img-top" 
               alt="Zincovit" 
               style="width: 100%; max-height: 150px; object-fit: contain;" />
          <div class="card-body">
            <h5 class="card-title">Zincovit (Multivitamin)</h5>
            <p class="card-text">Price 200.00 LKR</p>
          </div>
        </div>
      </div>

      <!-- Rantac (Ranitidine) -->
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('images/img5.webp') }}" 
               class="card-img-top" 
               alt="Rantac" 
               style="width: 100%; max-height: 150px; object-fit: contain;" />
          <div class="card-body">
            <h5 class="card-title">Rantac (Ranitidine)</h5>
            <p class="card-text">Price 220.00 LKR</p>
          </div>
        </div>
      </div>

      <!-- Neurobion (Vitamin B Complex) -->
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('images/img6.webp') }}" 
               class="card-img-top" 
               alt="Neurobion" 
               style="width: 100%; max-height: 150px; object-fit: contain;" />
          <div class="card-body">
            <h5 class="card-title">Neurobion (Vitamin B Complex)</h5>
            <p class="card-text">Price 250.00 LKR</p>
          </div>
        </div>
      </div>

      <!-- Ciplox (Ciprofloxacin) -->
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('images/img7.webp') }}" 
               class="card-img-top" 
               alt="Ciplox" 
               style="width: 100%; max-height: 150px; object-fit: contain;" />
          <div class="card-body">
            <h5 class="card-title">Ciplox (Ciprofloxacin)</h5>
            <p class="card-text">Price 270.00 LKR</p>
          </div>
        </div>
      </div>

      <!-- Vicks Vaporub -->
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('images/img8.jpg') }}" 
               class="card-img-top" 
               alt="Vicks Vaporub" 
               style="width: 100%; max-height: 150px; object-fit: contain;" />
          <div class="card-body">
            <h5 class="card-title">Vicks Vaporub</h5>
            <p class="card-text">Price 300.00 LKR</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Testimonials Carousel -->
  <section class="bg-light py-5">
    <div class="container text-center">
      <h2 class="mb-4">What Our Customers Say</h2>
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
              <p class="mb-3">"QuickMeds delivered my medicines on time. The process was smooth and hassle-free!"</p>
              <h6 class="mb-0 text-primary">– Prabashi Perera</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
              <p class="mb-3">"Excellent service and affordable prices. I highly recommend them to everyone."</p>
              <h6 class="mb-0 text-primary">– Akarsha Indeewari</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
              <p class="mb-3">"Their mobile-friendly website made it easy to order my prescription in minutes."</p>
              <h6 class="mb-0 text-primary">– Sandali Abeykoon</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
              <p class="mb-3">"Great customer service! They answered all my questions and guided me well."</p>
              <h6 class="mb-0 text-primary">– Savinthi Minaya</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
              <p class="mb-3">"I’ve been using QuickMeds for a while now. Reliable, quick, and trustworthy."</p>
              <h6 class="mb-0 text-primary">– Anuji Charithma</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
              <p class="mb-3">"Fast delivery, easy payments, and really convenient. I'm very satisfied!"</p>
              <h6 class="mb-0 text-primary">– Asheni Bandara</h6>
            </div>
          </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-primary rounded-circle" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-primary rounded-circle" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Location Section -->
  <section class="location" id="about">
    <div class="heading">
      <h2>OUR LOCATIONS</h2>
    </div>
    <div class="location-container d-flex justify-content-center flex-wrap gap-4">
      <div class="location-box text-center">
        <img src="{{ asset('images/place1.jpg') }}" alt="Colombo Location" class="img-fluid rounded" />
        <h3 class="mt-2">QuickMeds Pharmacy @ Ward Place</h3>
        <p>No 23, Ward Place, Colombo</p>
        <p>0771234556 | 0112345678</p>
      </div>
      <div class="location-box text-center">
        <img src="{{ asset('images/place2.jpg') }}" alt="Nugegoda Location" class="img-fluid rounded" />
        <h3 class="mt-2">QuickMeds Pharmacy @ Nugegoda</h3>
        <p>70/4, Temple Road, Nugegoda</p>
        <p>0752344563 | 0112346345</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-white py-3">
    <div class="container text-center">
      <p class="mb-1">© 2024 QuickMeds Pharmacy. All Rights Reserved.</p>
      <a href="{{ url('privacy') }}" class="text-white me-3">Privacy Policy</a>
      <a href="{{ url('terms') }}" class="text-white me-3">Terms of Service</a>
      <a href="{{ url('contact') }}" class="text-white">Contact</a> 
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
