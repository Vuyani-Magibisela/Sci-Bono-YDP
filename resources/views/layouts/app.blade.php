<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - YDP Training</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../css/landingPageStyles.css') }}">
    @yield('styles')
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('img/logo.svg') }}" alt="YDP Training Logo">
                <h1>YDP<span class="highlight">Training</span></h1>
            </div>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            <nav id="main-nav">
                <ul>
                    <li><a href="{{ route('home') }}" class="@if(request()->routeIs('home')) active @endif">Home</a></li>
                    <li><a href="{{ route('home') }}#about" class="@if(request()->is('about')) active @endif">About</a></li>
                    <li><a href="{{ route('home') }}#courses" class="@if(request()->routeIs('courses.*')) active @endif">Courses</a></li>
                    <li><a href="{{ route('home') }}#benefits" class="@if(request()->is('benefits')) active @endif">Benefits</a></li>
                    <li><a href="{{ route('home') }}#contact" class="@if(request()->is('contact')) active @endif">Contact</a></li>
                </ul>
            </nav>
            <div class="header-controls">
                <a href="{{ route('login') }}" class="btn btn-outline">Sign In</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>YDP Training</h3>
                    <p>Sci-Bono Youth Development Program providing quality ICT education to unemployed youth.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('home') }}#about">About</a></li>
                            <li><a href="{{ route('home') }}#courses">Courses</a></li>
                            <li><a href="{{ route('home') }}#benefits">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Courses</h4>
                        <ul>
                            <a href="{{ route('courses.uiux-coursepage') }}" class="@if(request()->routeIs('courses.uiux-coursepage')) active-link @endif">UI/UX Design Systems</a>
                            <li><a href="#" class="disabled-link">Web Development</a></li>
                            <li><a href="#" class="disabled-link">Programming</a></li>
                            <li><a href="#" class="disabled-link">Internet of Things</a></li>
                            <li><a href="#" class="disabled-link">Linux Essentials</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Sci-Bono Discovery Centre, Newtown, Johannesburg</li>
                            <li><i class="fas fa-phone"></i> (011) 639-8400</li>
                            <li><i class="fas fa-envelope"></i> info@sci-bono.co.za</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; {{ date('Y') }} YDP Training - Sci-Bono Youth Development Program. Created by Vuyani Magibisela.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')
    <script src="{{ asset('js/indexScripts.js') }}"></script>
</body>
</html>