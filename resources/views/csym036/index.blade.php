@extends('layouts.app')

@section('title', 'CSYM036 Portfolio | Jamal Shah')

@section('extra_styles')
<style>
    .hero {
        padding: 70px 0;
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 36px;
        align-items: center;
    }

    .tag {
        color: #38bdf8;
        font-weight: bold;
        margin-bottom: 16px;
    }

    .hero h1 {
        font-size: 48px;
        line-height: 1.1;
        margin: 0 0 20px;
    }

    .hero p {
        color: #cbd5e1;
        line-height: 1.7;
    }

    .buttons {
        margin-top: 28px;
    }

    .buttons a {
        display: inline-block;
        padding: 12px 18px;
        border-radius: 10px;
        margin-right: 10px;
        text-decoration: none;
        font-weight: bold;
    }

    .primary {
        background: #38bdf8;
        color: #020617;
    }

    .secondary {
        border: 1px solid #334155;
        color: #e5e7eb;
    }

    .list {
        display: grid;
        gap: 18px;
    }

    @media (max-width: 850px) {
        .hero {
            grid-template-columns: 1fr;
            padding: 50px 0;
        }

        .hero h1 {
            font-size: 36px;
        }
    }
</style>
@endsection

@section('content')
<section class="hero container">
    <div>
        <div class="tag">Career Futures: Employability Skills | CSYM036</div>

        <h1>Personal portfolio for a UK placement search.</h1>

        <p>
            This portfolio presents my skills, education, experience, projects, work process,
            and placement goals. It is designed for employers, placement teams, and academic review.
        </p>

        <div class="buttons">
            <a href="/projects" class="primary">View Projects</a>
            <a href="/contact" class="secondary">Contact Me</a>
        </div>
    </div>

    <div class="card">
    <div class="profile-mini">
        <img src="/images/profile.jpg" alt="Jamal Shah professional photo">
        <div>
            <strong>Jamal Shah</strong>
            <span>MSc Computing Student</span>
        </div>
    </div>

    <h2>Assessment Details</h2>
        <p><strong>Name:</strong> Jamal Shah</p>
        <p><strong>Student ID:</strong> 25827767</p>
        <p><strong>Module:</strong> CSYM036 Career Futures: Employability Skills</p>
        <p><strong>Target Role:</strong> Software Developer / Web Developer Placement</p>
        <p><strong>Location:</strong> Northampton, United Kingdom</p>
    </div>
</section>

<section class="section container">
    <h2>1. Professional Profile</h2>
    <p class="section-intro">
        A short introduction to who I am, what I am studying, and the placement role I am targeting.
    </p>

    <div class="two-col">
        <div class="card">
            <h3>About Me</h3>
            <p>
                I am an MSc Computing student at the University of Northampton with a background in
                software engineering, computer science research, teaching, and practical web development.
                My work includes Laravel applications, PHP/MySQL projects, Python Streamlit apps,
                AI-related research, and cloud deployment.
            </p>
        </div>

        <div class="card">
            <h3>Career Objective</h3>
            <p>
                My current goal is to secure a UK placement in software development, web development,
                AI-related applications, or cybersecurity-focused systems. I want to apply my technical
                skills in a real workplace and improve my experience with professional development workflows.
            </p>
        </div>
    </div>
</section>

<section class="section container">
    <h2>2. Skills</h2>
    <p class="section-intro">
        My skills are grouped by category and managed dynamically through the admin panel.
    </p>

    @foreach($skills as $category => $items)
        <div class="card" style="margin-bottom: 18px;">
            <h3>{{ $category ?: 'Other Skills' }}</h3>

            @foreach($items as $skill)
                <span class="badge">{{ $skill->name }} · {{ $skill->level }}%</span>
            @endforeach
        </div>
    @endforeach
</section>

<section class="section container">
    <h2>3. Work and Project Evidence</h2>
    <p class="section-intro">
        These projects show practical evidence of my technical ability and problem-solving approach.
    </p>

    <div class="grid">
        @foreach($featuredProjects as $project)
            <div class="card">
                <p class="blue">{{ $project->category }}</p>
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->short_description }}</p>
                <p><a href="/projects/{{ $project->slug }}">View project details</a></p>
            </div>
        @endforeach
    </div>
</section>

<section class="section container">
    <h2>4. Work Experience</h2>
    <p class="section-intro">
        My experience includes teaching, operational coordination, client communication,
        and technical project development.
    </p>

    <div class="list">
        @foreach($experiences as $experience)
            <div class="card">
                <h3>{{ $experience->job_title }}</h3>

                <p class="yellow">
                    {{ $experience->company }}
                    @if($experience->location)
                        · {{ $experience->location }}
                    @endif
                </p>

                <p class="small">
                    @if($experience->start_date)
                        {{ $experience->start_date->format('M Y') }}
                    @endif
                    -
                    @if($experience->current_role)
                        Present
                    @elseif($experience->end_date)
                        {{ $experience->end_date->format('M Y') }}
                    @else
                        Not specified
                    @endif
                </p>

                <p>{{ $experience->description }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="section container">
    <h2>5. Education</h2>
    <p class="section-intro">
        My academic background supports my target role in computing and software development.
    </p>

    <div class="list">
        @foreach($education as $item)
            <div class="card">
                <h3>{{ $item->degree }}</h3>

                <p class="yellow">
                    {{ $item->institution }}
                    @if($item->location)
                        · {{ $item->location }}
                    @endif
                </p>

                <p class="small">
                    {{ $item->start_year }} - {{ $item->end_year }}
                </p>

                <p>{{ $item->description }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="section container">
    <h2>6. Placement Target</h2>
    <p class="section-intro">
        This section explains the type of placement I am looking for and what I want to gain from it.
    </p>

    <div class="card">
        <p>
            I am looking for a placement role where I can contribute to software development,
            web application development, database-backed systems, or AI-related digital solutions.
            I am especially interested in roles where I can work with real users, improve existing systems,
            write clean code, test features, document my work, and learn from experienced developers.
        </p>

        <p>
            The ideal placement would allow me to improve my commercial development skills,
            gain experience with team-based workflows, understand UK workplace expectations,
            and build confidence in delivering technical work to professional standards.
        </p>
    </div>
</section>

<section class="section container">
    <h2>7. My Work Process</h2>
    <p class="section-intro">
        This explains how I usually approach technical work and project development.
    </p>

    <div class="grid">
        <div class="card">
            <h3>Understand the Problem</h3>
            <p>
                I start by identifying the purpose of the system, the target users, and the main problem
                the project needs to solve.
            </p>
        </div>

        <div class="card">
            <h3>Plan the Structure</h3>
            <p>
                I break the project into pages, database tables, features, and user actions before writing code.
            </p>
        </div>

        <div class="card">
            <h3>Build and Test</h3>
            <p>
                I develop features step by step, test them locally, fix errors, and check the result in the browser.
            </p>
        </div>

        <div class="card">
            <h3>Improve and Deploy</h3>
            <p>
                I improve layout, content, and usability before deployment. I also use GitHub and AWS where suitable.
            </p>
        </div>
    </div>
</section>

<section class="section container">
    <h2>8. CV and Contact Details</h2>
    <p class="section-intro">
        Employers can contact me or review my CV using the details below.
    </p>

    <div class="two-col">
        <div class="card">
            <h3>CV</h3>
            <p>
                My CV summarises my education, technical skills, projects, and work experience.
            </p>

            <p>
                <a href="/cv">View CV page</a><br>
                <a href="/files/jamal-shah-cv.pdf" target="_blank">Open CV PDF</a><br>
                <a href="/files/jamal-shah-cv.pdf" download>Download CV</a>
            </p>
        </div>

        <div class="card">
            <h3>Contact</h3>
            <p><strong>Email:</strong> jamalshah963@gmail.com</p>
            <p><strong>GitHub:</strong> https://github.com/mianjamalshah</p>
            <p><strong>LinkedIn:</strong> https://www.linkedin.com/in/mianjamalshah963/</p>
            <p><a href="/contact">Send a message through the contact form</a></p>
        </div>
    </div>
</section>

<section class="section container">
    <h2>9. Supportive Information</h2>
    <p class="section-intro">
        Additional evidence that supports my employability and professional development.
    </p>

    <div class="card">
        <ul>
            <li>Deployed portfolio website using Laravel, Filament, MySQL, and AWS deployment planning.</li>
            <li>Experience with GitHub-based project management and version control.</li>
            <li>Academic experience in deep learning, food image classification, and cybersecurity applications.</li>
            <li>Practical experience with client communication, documentation, and digital business processes.</li>
        </ul>
    </div>
</section>
@endsection



