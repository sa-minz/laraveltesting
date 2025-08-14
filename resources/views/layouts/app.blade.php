<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') | Pharmacy System</title>
    
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webfonts/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    
    <style>
        .main-content {
            padding: 1rem 0;
        }
        
        @media (min-width: 768px) {
            .main-content {
                padding: 2rem 0;
            }
        }
        
        /* Ensure footer stays at bottom */
        html, body {
            height: 100%;
        }
        
        body {
            display: flex;
            flex-direction: column;
        }
        
        .main-content {
            flex: 1 0 auto;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    
    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>
    
    @include('partials.footer')

    <!-- JS Files -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>