@extends('layouts.app')

@section('title', 'CSYM036 Portfolio | Jamal Shah')

@section('extra_styles')
<style>
    .hero {
        padding: 70px 0;
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 36px;
        align-items: center;
    }

    .tag {
        display: inline-block;
        color: #38bdf8;
        font-weight: 800;
        margin-bottom: 16px;
        background: rgba(56, 189, 248, 0.1);
        border: 1px solid rgba(56, 189, 248, 0.24);
        padding: 8px 13px;
        border-radius: 999px;
        font-size: 15px;
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
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .buttons a {
        display: inline-block;
        padding: 12px 18px;
        border-radius: 10px;
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

    .profile-mini {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 18px;
    }

    .profile-mini img {
        width: 72px;
        height: 72px;
        border-radius: 999px;
        object-fit: cover;
        border: 2px solid rgba(56, 189, 248, 0.35);
    }

    .profile-mini strong {
        display: block;
        color: #e5e7eb;
        font-size: 18px;
    }

    .profile-mini span {
        color: #94a3b8;
        font-size: 14px;
    }

    .profile-feature {
        display: flex;
        align-items: center;
        gap: 28px;
    }

    .profile-feature img {
        width: 190px;
        height: 190px;
        border-radius: 999px;
        object-fit: cover;
        border: 4px solid rgba(56, 189, 248, 0.35);
        box-shadow: 0 20px 60px rgba(56, 189, 248, 0.18);
        flex-shrink: 0;
    }

    .profile-feature-content {
        flex: 1;
    }

    .link-list a {
        display: block;
        margin-bottom: 8px;
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

    @media (max-width: 700px) {
        .profile-feature {
            display: block;
            text-align: center;
        }

        .profile-feature img {
            width: 155px;
            height: 155px;
            margin-bottom: 18px;
        }

        .profile-feature-content {
            text-align: left;
        }
    }
</style>
@endsection

@section('content')

{{-- Title Page / Assessment Details --}}
<section class="hero container">
    <div>
        <div class="tag">Career Futures: Employability Skills | CSYM036</div>

        <h1>Employability Portfolio for a UK Placement Search.</h1>

        <p>
            This portfolio presents my professional profile, skills, work examples, education,
            CV, contact details, placement goals, and work process. It has been developed as part
            of my CSYM036 Career Futures: Employability Skills assessment.
        </p>

        <div class="buttons">
            <a href="/projects" class="primary">View Projects</a>
            <a href="/cv" class="secondary">View CV</a>
            <a href="/contact" class="secondary">Contact Me</a>
        </div>
    </div>

    <div class="card">
        <div class="profile-mini">
            <img src="/images/profile.jpg" alt="Jamal Shah professional photo">
            <div>
                <strong>Mian Jamal Shah</strong>
                <span>MSc Computing Student</span>
            </div>
        </div>

        <h2>Assessment Details</h2>
        <p><strong>Assessment Title:</strong> Employability Portfolio</p>
        <p><strong>Name:</strong> Mian Jamal Shah</p>
        <p><strong>Student ID:</strong> 25827767</p>
        <p><strong>Module Code:</strong> CSYM036</p>
        <p><strong>Module:</strong> Career Futures: Employability Skills</p>
        <p><strong>Tutor:</strong> Apkar Salatian</p>
        <p><strong>Target Role:</strong> Software Developer / Web Developer Placement</p>
        <p><strong>Location:</strong> Northampton, United Kingdom</p>
    </div>
</section>

{{-- Photo and Professional Introduction --}}
<section class="section container">
    <h2>1. Photo and Professional Introduction</h2>

    <p class="section-intro">
        This section introduces who I am, what I am currently studying, and the type of career path I am preparing for.
    </p>

    <div class="card">
        <div class="profile-feature">
            <img src="/images/profile.jpg" alt="Jamal Shah professional photo">

            <div class="profile-feature-content">
                <h3>Professional Introduction</h3>

                <p>
                    I am an MSc Computing student at the University of Northampton with a background in
                    software engineering, computer science research, teaching, and practical web development.
                    My work includes Laravel applications, PHP/MySQL projects, Python Streamlit apps,
                    AI-related research, cybersecurity practice, and AWS deployment.
                </p>

                <p>
                    I am currently preparing for a UK placement role where I can apply my technical skills,
                    improve my professional development practice, and gain experience working on real software systems.
                </p>
            </div>
        </div>
    </div>

    <div class="card" style="margin-top: 22px;">
        <h3>Career Interest</h3>

        <p>
            I am interested in software development, web development, full-stack development,
            AI-related applications, and cybersecurity-focused systems. I enjoy building practical
            applications that solve real problems and help users complete tasks more efficiently.
        </p>
    </div>
</section>

{{-- About Me --}}
<section class="section container">
    <h2>2. About Me</h2>

    <p class="section-intro">
        This section explains more about my background, motivation, and the personal qualities I bring to a placement role.
    </p>

    <div class="two-col">
        <div class="card">
            <h3>My Background</h3>
            <p>
                My academic background combines software engineering and computer science. I completed
                postgraduate research in deep learning and food image classification, and I have experience
                teaching Computer Science, developing web applications, and working with digital business processes.
            </p>

            <p>
                My experience as a lecturer helped me improve my communication, explanation, and presentation skills.
                My operational work helped me understand client requirements, documentation, service delivery,
                and practical problem-solving in a business environment.
            </p>
        </div>

        <div class="card">
            <h3>My Motivation</h3>
            <p>
                I am motivated by practical technology. I like building applications that can be tested, used,
                improved, and explained clearly. This portfolio itself is part of that approach because it is
                not only a website, but a database-driven system with an admin panel, live deployment, domain setup,
                and SSL configuration.
            </p>

            <p>
                I want to use my placement year to become more confident in professional software development,
                teamwork, version control, testing, deployment, and communication with technical and non-technical users.
            </p>
        </div>
    </div>
</section>

{{-- Skills --}}
<section class="section container">
    <h2>3. Skills</h2>

    <p class="section-intro">
        My skills are grouped by category and managed dynamically through the admin panel. My strongest areas are
        web development, database-backed applications, Python-based tools, AI-related project work, and deployment.
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

{{-- Work Examples and Personal Projects --}}
<section class="section container">
    <h2>4. Work Examples and Projects</h2>

    <p class="section-intro">
        These projects provide practical evidence of my technical ability. They show my experience with web development,
        cybersecurity practice, intelligent systems, AI research, deployment, and database-backed applications.
    </p>

    <div class="grid">
        @foreach($featuredProjects as $project)
            <div class="card">
                @if($project->category)
                    <p class="blue">{{ $project->category }}</p>
                @endif

                <h3>{{ $project->title }}</h3>
                <p>{{ $project->short_description }}</p>

                <p>
                    <a href="/projects/{{ $project->slug }}">View project details</a>
                </p>

                @if($project->github_url || $project->live_url)
                    <p>
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank">GitHub</a>
                        @endif

                        @if($project->github_url && $project->live_url)
                            |
                        @endif

                        @if($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank">Live Demo</a>
                        @endif
                    </p>
                @endif
            </div>
        @endforeach
    </div>
</section>

{{-- Work Experience --}}
<section class="section container">
    <h2>5. Work Experience</h2>

    <p class="section-intro">
        My experience includes teaching, operational coordination, client communication,
        technical documentation, and software project development.
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

                @if($experience->description)
                    <p>{{ $experience->description }}</p>
                @endif
            </div>
        @endforeach
    </div>
</section>

{{-- Education --}}
<section class="section container">
    <h2>6. Education</h2>

    <p class="section-intro">
        My academic background supports my target role in computing, software development,
        AI-related applications, and web technologies.
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

                @if($item->description)
                    <p>{{ $item->description }}</p>
                @endif
            </div>
        @endforeach
    </div>
</section>

{{-- CV --}}
<section class="section container">
    <h2>7. CV</h2>

    <p class="section-intro">
        My CV provides a fuller summary of my education, technical skills, project work, employment background,
        and placement readiness.
    </p>

    <div class="card">
        <h3>View or Download My CV</h3>

        <p>
            The CV page includes a viewable PDF and download option for employers, placement teams, and academic review.
        </p>

        <p>
            <a href="/cv">View CV page</a><br>
            <a href="/files/jamal-shah-cv.pdf" target="_blank">Open CV PDF</a><br>
            <a href="/files/jamal-shah-cv.pdf" download>Download CV</a>
        </p>
    </div>
</section>

{{-- Contact Details and Social Links --}}
<section class="section container">
    <h2>8. Contact Details and Professional Links</h2>

    <p class="section-intro">
        This section provides ways for employers, tutors, and placement teams to contact me or view my professional work.
    </p>

    <div class="two-col">
        <div class="card">
            <h3>Contact Details</h3>
            <p><strong>Email:</strong> <a href="mailto:jamalshah963@gmail.com">jamalshah963@gmail.com</a></p>
            <p><strong>Location:</strong> Northampton, United Kingdom</p>
            <p><strong>Contact Form:</strong> <a href="/contact">Send a message through the website</a></p>
        </div>

        <div class="card link-list">
            <h3>Professional Links</h3>
            <a href="https://github.com/mianjamalshah" target="_blank">GitHub: github.com/mianjamalshah</a>
            <a href="https://www.linkedin.com/in/mianjamalshah963/" target="_blank">LinkedIn: linkedin.com/in/mianjamalshah963</a>
            <a href="/projects">Project Portfolio</a>
            <a href="/cv">CV Page</a>
        </div>
    </div>
</section>

{{-- Work Placement Target --}}
<section class="section container">
    <h2>9. Work Placement Target</h2>

    <p class="section-intro">
        This section explains the kind of placement I am looking for, what I want to gain from it,
        and what I can offer to an employer.
    </p>

    <div class="two-col">
        <div class="card">
            <h3>Type of Placement I Am Looking For</h3>
            <p>
                I am looking for a placement in software development, web development, full-stack development,
                AI-related applications, or cybersecurity-focused systems. I am interested in roles where I can
                work with real users, contribute to database-backed applications, write clean code, test features,
                document my work, and learn professional development practices.
            </p>
        </div>

        <div class="card">
            <h3>What I Want to Gain</h3>
            <p>
                I want to gain UK workplace experience, improve my teamwork and communication skills,
                understand professional software workflows, and build confidence in delivering software
                to a high standard. I also want to improve my use of Git, deployment processes, testing,
                documentation, and collaboration with experienced developers.
            </p>
        </div>
    </div>

    <div class="card" style="margin-top: 22px;">
        <h3>What I Can Offer</h3>
        <p>
            I can offer practical coding ability, database knowledge, research experience, documentation skills,
            problem-solving, and a strong willingness to learn. My portfolio shows that I can build, deploy,
            and maintain a working web application using Laravel, Filament, MySQL, GitHub, AWS, DNS, and SSL.
        </p>
    </div>
</section>

{{-- Work Process --}}
<section class="section container">
    <h2>10. My Work Process</h2>

    <p class="section-intro">
        This section explains how I usually approach technical work and project development.
    </p>

    <div class="grid">
        <div class="card">
            <h3>Understand the Problem</h3>
            <p>
                I start by identifying the purpose of the system, the target users, and the main problem
                the project needs to solve. This helps me avoid building features without a clear purpose.
            </p>
        </div>

        <div class="card">
            <h3>Plan the Structure</h3>
            <p>
                I break the project into pages, database tables, user actions, routes, models, and admin features.
                This helps me work step by step instead of making random changes.
            </p>
        </div>

        <div class="card">
            <h3>Build and Test</h3>
            <p>
                I develop features gradually, test them locally, check the database, fix errors, and review the result
                in the browser before moving on to the next part.
            </p>
        </div>

        <div class="card">
            <h3>Improve and Deploy</h3>
            <p>
                I improve layout, content, and usability before deployment. I use GitHub for version control and AWS
                for live hosting where suitable.
            </p>
        </div>
    </div>
</section>

{{-- Supportive Information --}}
<section class="section container">
    <h2>11. Supportive Information</h2>

    <p class="section-intro">
        Additional evidence that supports my employability, technical development, and placement readiness.
    </p>

    <div class="card">
        <ul>
            <li>Built and deployed this portfolio using Laravel, Filament, MySQL, GitHub, AWS Lightsail, Route 53, Apache, and SSL.</li>
            <li>Created a dynamic admin panel to manage projects, skills, education, experience, and contact messages.</li>
            <li>Developed project evidence in cybersecurity, intelligent systems, web development, and food image classification.</li>
            <li>Applied GitHub-based version control and AWS server deployment workflow.</li>
            <li>Gained experience with DNS records, domain setup, HTTPS configuration, and production Laravel deployment.</li>
            <li>Academic background includes deep learning, computer vision, food safety applications, and software engineering.</li>
        </ul>
    </div>
</section>

{{-- Reflection and Next Steps --}}
<section class="section container">
    <h2>12. Reflection and Next Steps</h2>

    <p class="section-intro">
        This section reflects on how building this portfolio has supported my employability development.
    </p>

    <div class="two-col">
        <div class="card">
            <h3>What I Improved</h3>
            <p>
                Building this portfolio improved my ability to plan, develop, deploy, and maintain a professional
                web application. I strengthened my Laravel, MySQL, Filament, GitHub, AWS Lightsail, DNS, SSL,
                and server configuration skills. I also improved how I present my projects, experience,
                and technical strengths to employers.
            </p>
        </div>

        <div class="card">
            <h3>What I Learned About Employability</h3>
            <p>
                I learned that employability is not only about listing technical skills. A strong portfolio needs
                clear evidence, professional communication, working project links, a suitable CV, and a clear explanation
                of the type of role I am targeting. This website now gives employers a direct way to review my skills,
                projects, background, and contact details.
            </p>
        </div>
    </div>

    <div class="card" style="margin-top: 22px;">
        <h3>Next Steps</h3>
        <p>
            My next steps are to keep improving the portfolio with more completed projects, update my CV as I gain
            new experience, apply for software development and web development placement roles, and continue building
            technical evidence through practical applications. I will also improve each project case study by adding
            screenshots, GitHub links, live demos, and clearer explanations of the problem, solution, tools used, and outcome.
        </p>
    </div>
</section>

@endsection