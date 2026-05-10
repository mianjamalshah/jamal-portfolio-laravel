@extends('layouts.app')

@section('title', 'Jamal Shah | Software Developer Portfolio')

@section('extra_styles')
<style>
    .hero {
        padding: 58px 0;
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 44px;
        align-items: center;
    }

    .tag {
        display: inline-block;
        color: #38bdf8;
        font-weight: 800;
        margin-bottom: 18px;
        background: rgba(56, 189, 248, 0.1);
        border: 1px solid rgba(56, 189, 248, 0.24);
        padding: 8px 13px;
        border-radius: 999px;
        font-size: 15px;
    }

    .hero h1 {
        font-size: clamp(40px, 5vw, 60px);
        line-height: 1.06;
        margin-bottom: 20px;
        max-width: 760px;
    }

    .hero p {
        font-size: 17px;
        line-height: 1.75;
        max-width: 720px;
    }

    .buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 28px;
    }

    .hero-card {
        max-width: 420px;
        justify-self: end;
    }

    .hero-card h2 {
        font-size: 32px;
        margin-bottom: 14px;
    }

    .profile-photo-wrap {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .profile-photo {
        width: 145px;
        height: 145px;
        border-radius: 999px;
        object-fit: cover;
        border: 3px solid rgba(56, 189, 248, 0.35);
        box-shadow: 0 16px 50px rgba(56, 189, 248, 0.16);
    }

    .hero-stats {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        margin-top: 22px;
    }

    .stat {
        background: rgba(2, 6, 23, 0.45);
        border: 1px solid rgba(51, 65, 85, 0.7);
        border-radius: 16px;
        padding: 15px;
    }

    .stat strong {
        display: block;
        font-size: 22px;
        color: #facc15;
        margin-bottom: 4px;
    }

    .stat span {
        color: #94a3b8;
        font-size: 13px;
    }

    @media (max-width: 950px) {
        .hero {
            grid-template-columns: 1fr;
            padding: 45px 0;
        }

        .hero-card {
            max-width: 100%;
            justify-self: stretch;
        }
    }

    @media (max-width: 600px) {
        .hero h1 {
            font-size: 34px;
        }

        .hero p {
            font-size: 16px;
        }

        .hero-stats {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
<section class="hero container">
    <div>
        <div class="tag">MSc Computing Student | Software Developer Placement Candidate</div>

        <h1>Building practical web, security, and AI projects.</h1>

        <p>
            I am a postgraduate computing student at the University of Northampton, seeking a UK placement
            in software development, web technologies, or AI-related systems. My work combines academic
            research, practical coding, database-driven applications, and cloud deployment experience.
        </p>

        <div class="buttons">
            <a href="/projects" class="primary">View Projects</a>
            <a href="/csym036-portfolio" class="secondary">CSYM036 Portfolio</a>
        </div>
    </div>

    <div class="card hero-card">
        <div class="profile-photo-wrap">
            <img class="profile-photo" src="/images/profile.jpg" alt="Jamal Shah professional photo">
        </div>

        <h2>Portfolio Focus</h2>

        <p>
            A database-driven portfolio built to support placement applications, project evidence,
            and professional presentation.
        </p>

        <div class="hero-stats">
            <div class="stat">
                <strong>{{ $featuredProjects->count() }}+</strong>
                <span>Featured projects</span>
            </div>

            <div class="stat">
                <strong>5</strong>
                <span>Technical areas</span>
            </div>

            <div class="stat">
                <strong>AWS</strong>
                <span>Deployment focus</span>
            </div>

            <div class="stat">
                <strong>CSYM036</strong>
                <span>Assessment ready</span>
            </div>
        </div>
    </div>
</section>

<section class="section container">
    <h2>Featured Projects</h2>

    <p class="section-intro">
        Selected projects from my portfolio, managed through my Laravel admin panel.
    </p>

    @if($featuredProjects->count())
        <div class="grid">
            @foreach($featuredProjects as $project)
                <div class="card">
                    @if($project->category)
                        <p class="blue">{{ $project->category }}</p>
                    @endif

                    <h3>{{ $project->title }}</h3>

                    <p>{{ $project->short_description }}</p>

                    <p>
                        <a href="/projects/{{ $project->slug }}">View case study</a>
                    </p>
                </div>
            @endforeach
        </div>
    @else
        <div class="card">
            <p>No featured projects have been added yet.</p>
        </div>
    @endif
</section>

<section class="section container">
    <h2>What I am looking for</h2>

    <div class="two-col">
        <div class="card">
            <h3>Placement Role</h3>
            <p>
                I am looking for a UK placement in software development, web development,
                AI-related applications, or cybersecurity-focused systems.
            </p>
        </div>

        <div class="card">
            <h3>What I can offer</h3>
            <p>
                I can contribute practical coding skills, database knowledge, documentation ability,
                research experience, and a strong willingness to learn in a professional development team.
            </p>
        </div>
    </div>
</section>
@endsection