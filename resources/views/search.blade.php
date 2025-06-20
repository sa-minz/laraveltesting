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

 
  <!-- Category: Pain Relief -->
  <section class="mb-5">
    <h3 class="category-title">
      Pain Relief <span class="category-badge"><i class="bi bi-heart-pulse"></i></span>
    </h3>
    <div class="row g-4">

      <!-- 1. Dolo 650 -->
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset('images/img1.jpg') }}" class="card-img-top" alt="Dolo 650" />
          <div class="card-body">
            <h5 class="card-title">Dolo 650 (Paracetamol)</h5>
            <p class="card-text">Effective for fever and mild pain relief.</p>
            <p class="text-success fw-bold">Price: 120.00 LKR</p>
            <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
          </div>
        </div>
      </div>

      <!-- 2. Crocin Cold & Flu -->
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset('images/img2.webp') }}" class="card-img-top" alt="Crocin Cold & Flu" />
          <div class="card-body">
            <h5 class="card-title">Crocin Cold & Flu</h5>
            <p class="card-text">Relieves cold symptoms and body pain.</p>
            <p class="text-success fw-bold">Price: 150.00 LKR</p>
            <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
          </div>
        </div>
      </div>

      <!-- 3. Ibuprofen -->
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset('images/img9.webp') }}" class="card-img-top" alt="Ibuprofen" />
          <div class="card-body">
            <h5 class="card-title">Ibuprofen</h5>
            <p class="card-text">Reduces pain, inflammation, and fever.</p>
            <p class="text-success fw-bold">Price: 160.00 LKR</p>
            <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
          </div>
        </div>
      </div>

      <!-- 4. Aspirin -->
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset('images/img10.webp') }}" class="card-img-top" alt="Aspirin" />
          <div class="card-body">
            <h5 class="card-title">Aspirin</h5>
            <p class="card-text">Helps with pain, fever, and inflammation.</p>
            <p class="text-success fw-bold">Price: 140.00 LKR</p>
            <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
          </div>
        </div>
      </div>

      <!-- 5. Diclofenac -->
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset('images/img11.webp') }}" class="card-img-top" alt="Diclofenac" />
          <div class="card-body">
            <h5 class="card-title">Diclofenac</h5>
            <p class="card-text">Used for joint and muscle pain.</p>
            <p class="text-success fw-bold">Price: 180.00 LKR</p>
            <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
          </div>
        </div>
      </div>

      <!-- 6. Naproxen -->
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset('images/img12.webp') }}" class="card-img-top" alt="Naproxen" />
          <div class="card-body">
            <h5 class="card-title">Naproxen</h5>
            <p class="card-text">Long-acting relief for arthritis & back pain.</p>
            <p class="text-success fw-bold">Price: 190.00 LKR</p>
            <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
          </div>
        </div>
      </div>

      <!-- 7. Tramadol -->
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset('images/img13.webp') }}" class="card-img-top" alt="Tramadol" />
          <div class="card-body">
            <h5 class="card-title">Tramadol</h5>
            <p class="card-text">Prescription drug for moderate to severe pain.</p>
            <p class="text-success fw-bold">Price: 300.00 LKR</p>
            <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
          </div>
        </div>
      </div>

      <!-- 8. Celecoxib -->
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset('images/img14.webp') }}" class="card-img-top" alt="Celecoxib" />
          <div class="card-body">
            <h5 class="card-title">Celecoxib</h5>
            <p class="card-text">COX-2 inhibitor for arthritis and chronic pain.</p>
            <p class="text-success fw-bold">Price: 250.00 LKR</p>
            <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
          </div>
        </div>
      </div>
     </div>
  </section>
</div>


    <!-- Example Category: Vitamins & Supplements -->
<section class="mb-5">
  <h3 class="category-title">
    Vitamins & Suppliments <span class="category-badge"><i class="bi bi-clipboard-plus"></i></span>
  </h3>
  <div class="row g-4">
  
    <!-- 1. Zincovit -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img4.jpg') }}" class="card-img-top" alt="Zincovit" />
        <div class="card-body">
          <h5 class="card-title">Zincovit (Multivitamin)</h5>
          <p class="card-text">Boosts immunity and overall health.</p>
          <p class="text-success fw-bold">Price: 200.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 2. Neurobion -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img6.webp') }}" class="card-img-top" alt="Neurobion" />
        <div class="card-body">
          <h5 class="card-title">Neurobion (Vitamin B Complex)</h5>
          <p class="card-text">Supports nerve health and energy production.</p>
          <p class="text-success fw-bold">Price: 250.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 3. Revicon Forte -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img15.webp') }}" class="card-img-top" alt="Revicon Forte" />
        <div class="card-body">
          <h5 class="card-title">Revicon Forte</h5>
          <p class="card-text">Enhances physical and mental performance.</p>
          <p class="text-success fw-bold">Price: 230.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 4. Seven Seas Cod Liver Oil -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img16.webp') }}" class="card-img-top" alt="Seven Seas Cod Liver Oil" />
        <div class="card-body">
          <h5 class="card-title">Seven Seas Cod Liver Oil</h5>
          <p class="card-text">Rich in omega-3 and vitamins A & D.</p>
          <p class="text-success fw-bold">Price: 300.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 5. Becozinc -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img17.webp') }}" class="card-img-top" alt="Becozinc" />
        <div class="card-body">
          <h5 class="card-title">Becozinc</h5>
          <p class="card-text">Helps in maintaining healthy skin and immunity.</p>
          <p class="text-success fw-bold">Price: 210.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 6. Shelcal 500 -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img18.webp') }}" class="card-img-top" alt="Shelcal 500" />
        <div class="card-body">
          <h5 class="card-title">Shelcal 500</h5>
          <p class="card-text">Calcium supplement for bone health.</p>
          <p class="text-success fw-bold">Price: 270.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 7. Supradyn -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img19.webp') }}" class="card-img-top" alt="Supradyn" />
        <div class="card-body">
          <h5 class="card-title">Supradyn</h5>
          <p class="card-text">Multivitamin for energy and vitality.</p>
          <p class="text-success fw-bold">Price: 280.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 8. Vitrum Women -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img20.webp') }}" class="card-img-top" alt="Vitrum Women" />
        <div class="card-body">
          <h5 class="card-title">Vitrum Women</h5>
          <p class="card-text">Complete multivitamin for women's health.</p>
          <p class="text-success fw-bold">Price: 320.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

  </div>
</section>


    <!-- Example Category: Antibiotics -->
<section class="mb-5">
  <h3 class="category-title">Antibiotics<span class="category-badge"><i class="bi bi-capsule"></i></span></h3>
  <div class="row g-4">

  

    <!-- 1. Ciplox -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img7.webp') }}" class="card-img-top" alt="Ciplox" />
        <div class="card-body">
          <h5 class="card-title">Ciplox (Ciprofloxacin)</h5>
          <p class="card-text">Treats bacterial infections effectively.</p>
          <p class="text-success fw-bold">Price: 270.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 2. Augmentin -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img21.webp') }}" class="card-img-top" alt="Augmentin" />
        <div class="card-body">
          <h5 class="card-title">Augmentin</h5>
          <p class="card-text">Broad-spectrum antibiotic for various infections.</p>
          <p class="text-success fw-bold">Price: 450.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 3. Azithral (Azithromycin) -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img22.webp') }}" class="card-img-top" alt="Azithral" />
        <div class="card-body">
          <h5 class="card-title">Azithral (Azithromycin)</h5>
          <p class="card-text">Used for respiratory and skin infections.</p>
          <p class="text-success fw-bold">Price: 320.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

    <!-- 4. Flagyl (Metronidazole) -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('images/img23.webp') }}" class="card-img-top" alt="Flagyl" />
        <div class="card-body">
          <h5 class="card-title">Flagyl (Metronidazole)</h5>
          <p class="card-text">Effective against anaerobic bacterial and protozoal infections.</p>
          <p class="text-success fw-bold">Price: 210.00 LKR</p>
          <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
        </div>
      </div>
    </div>

  </div>
</section>


    <!-- Example Category: Others -->
    <section class="mb-5">
      <div class="category-title"> Others <span class="category-badge"><i class="bi bi-box-seam"></i></span>
 </div>

      <div class="row g-4">
        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/img3.webp') }}" class="card-img-top" alt="Liv52" />
            <div class="card-body">
              <h5 class="card-title">Liv52 (Liver Tonic)</h5>
              <p class="card-text">Supports liver health and detoxification.</p>
              <p class="text-success fw-bold">Price: 180.00 LKR</p>
              <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/img5.webp') }}" class="card-img-top" alt="Rantac" />
            <div class="card-body">
              <h5 class="card-title">Rantac (Ranitidine)</h5>
              <p class="card-text">Relieves heartburn and acid reflux.</p>
              <p class="text-success fw-bold">Price: 220.00 LKR</p>
              <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="{{ asset('images/img8.jpg') }}" class="card-img-top" alt="Vicks Vaporub" />
            <div class="card-body">
              <h5 class="card-title">Vicks Vaporub</h5>
              <p class="card-text">Relieves cough and congestion symptoms.</p>
              <p class="text-success fw-bold">Price: 300.00 LKR</p>
              <a href="{{ url('login') }}" class="btn btn-sm btn-primary mt-2 w-100">
        <i class="bi bi-cart-plus"></i> Order Now
      </a>
            </div>
          </div>
        </div>
      </div>
    </section>

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
  
</body>
</html>
