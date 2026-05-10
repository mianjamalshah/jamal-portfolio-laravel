<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jamal Shah Portfolio')</title>

    <link rel="stylesheet" href="/css/style.css">

    @yield('extra_styles')
</head>
<body>

<header>
    <div class="container">
        <nav>
            <div class="logo">Jamal Shah</div>

            <div class="nav-links">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/projects">Projects</a>            
                <a href="/skills">Skills</a>
                <a href="/experience">Experience</a>
                <a href="/education">Education</a>
                <a href="/cv">CV</a>
                <a href="/csym036-portfolio">CSYM036</a>
                <a href="/contact">Contact</a>
            </div>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="container">
        © {{ date('Y') }} Jamal Shah. Portfolio built with Laravel, Filament, and MySQL.
    </div>
</footer>

</body>
</html>