<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mian Jamal Shah Portfolio')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('extra_styles')
</head>
<body>

<header class="site-header">
    <div class="container">
        <nav class="navbar">
            <a href="/" class="logo">Mian Jamal Shah</a>

            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="nav-links" id="navLinks">
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="/projects" class="{{ request()->is('projects*') ? 'active' : '' }}">Projects</a>
                <a href="/skills" class="{{ request()->is('skills') ? 'active' : '' }}">Skills</a>
                <a href="/experience" class="{{ request()->is('experience') ? 'active' : '' }}">Experience</a>
                <a href="/education" class="{{ request()->is('education') ? 'active' : '' }}">Education</a>
                <a href="/cv" class="{{ request()->is('cv') ? 'active' : '' }}">CV</a>
                <a href="/csym036-portfolio" class="{{ request()->is('csym036-portfolio') ? 'active' : '' }}">CSYM036</a>
                <a href="/contact" class="nav-cta {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="container footer-inner">
        <p>© {{ date('Y') }} Mian Jamal Shah. Portfolio built with Laravel, Filament, MySQL, and AWS.</p>
    </div>
</footer>

<script>
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');

    navToggle.addEventListener('click', function () {
        navLinks.classList.toggle('open');
        navToggle.classList.toggle('open');
    });
</script>

</body>
</html>