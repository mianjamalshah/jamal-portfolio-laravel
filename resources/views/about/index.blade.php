@extends('layouts.app')

@section('title', 'About Me | Jamal Shah')

@section('content')
<div class="container page">
    <a class="back-link" href="/">← Back to Home</a>

    <h1>About Me</h1>

    <p class="intro">
        I am an MSc Computing student at the University of Northampton, currently preparing for a UK placement role in software development, web development, AI-related applications, or cybersecurity-focused systems.
    </p>

    <div class="two-col">
        <div class="card">
            <h2>My Background</h2>

            <p>
                My academic background is in software engineering and computer science. I have completed postgraduate research in deep learning and food image classification, and I have practical experience building web applications, Streamlit tools, Laravel systems, and database-backed projects.
            </p>

            <p>
                I have also worked as a Computer Science lecturer, which helped me improve my communication, teaching, and technical explanation skills. Alongside this, my work in operations and IT-related coordination gave me experience with real business problems, client communication, and digital process improvement.
            </p>
        </div>

        <div class="card">
            <h2>What Motivates Me</h2>

            <p>
                I enjoy building systems that solve real problems. I am especially interested in projects where software connects with practical needs, such as secure applications, AI-supported tools, business process systems, and portfolio platforms.
            </p>

            <p>
                My current focus is to improve my professional development skills, strengthen my coding practice, and gain workplace experience in the UK technology sector through a placement.
            </p>
        </div>
    </div>

    <section class="section">
        <h2>Current Technical Focus</h2>

        <div class="grid">
            <div class="card">
                <h3>Web Development</h3>
                <p>
                    Building database-driven web applications using Laravel, PHP, MySQL, Blade templates, and Filament admin panels.
                </p>
            </div>

            <div class="card">
                <h3>AI and Research</h3>
                <p>
                    Applying machine learning and deep learning concepts to practical problems, especially image classification and food safety-related applications.
                </p>
            </div>

            <div class="card">
                <h3>Cybersecurity Practice</h3>
                <p>
                    Developing practical understanding of encryption, password hashing, TLS, secure storage, and security policy mapping.
                </p>
            </div>

            <div class="card">
                <h3>Cloud and Deployment</h3>
                <p>
                    Improving deployment skills using GitHub, AWS, server configuration, and web hosting workflows.
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <h2>Placement Goal</h2>

        <div class="card">
            <p>
                I am looking for a placement where I can work with experienced developers, contribute to real software projects, and improve my confidence in professional development workflows. I want to gain experience in writing clean code, testing features, working with databases, using version control, communicating with teams, and delivering useful software.
            </p>

            <p>
                The roles I am most interested in are Software Developer Placement, Web Developer Placement, Junior Full Stack Developer Placement, AI Application Developer Placement, or Cybersecurity-related technical support roles.
            </p>
        </div>
    </section>
</div>
@endsection