<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - QuickMeds Pharmacy</title>

  <!-- Local Bootstrap & Icons -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('webfonts/bootstrap-icons.css') }}" rel="stylesheet" />

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
        <a class="btn btn-outline-light" href="{{ url('register') }}"><i class="bi bi-person-plus"></i> Register</a>
      </div>
    </div>
  </nav>

  <!-- Login Form -->
  <div class="overlay-container">
    <div class="login-box container py-5" style="max-width: 400px;">
      <h2 class="mb-4 text-center">Login</h2>
      <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div class="mb-3">
          <label for="emailInput" class="form-label">Email</label>
          <input
            type="email"
            id="emailInput"
            name="email"
            class="form-control @error('email') is-invalid @enderror"
            placeholder="Enter email"
            value="{{ old('email') }}"
            required
            autofocus
            autocomplete="email"
          />
          @error('email')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="passwordInput" class="form-label">Password</label>
          <input
            type="password"
            id="passwordInput"
            name="password"
            class="form-control @error('password') is-invalid @enderror"
            placeholder="Password"
            required
            autocomplete="current-password"
          />
          @error('password')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" name="remember" id="remember" class="form-check-input">
          <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>

      
    </div>
  </div>

  <!-- Local Bootstrap JS -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>