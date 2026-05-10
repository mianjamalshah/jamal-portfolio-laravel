@extends('layouts.app')

@section('title', 'Projects | Mian Jamal Shah')

@section('content')
<div class="container page">
    <p><a href="/">← Back to Home</a></p>

    <h1>Projects</h1>

    <p class="intro">
        A selection of my software development, cybersecurity, AI, and web application projects.
        These projects show my practical skills in building, testing, deploying, and presenting technical work.
    </p>

    @if($projects->count())
        <div class="grid">
            @foreach($projects as $project)
                <div class="card">
                    @if($project->category)
                        <p class="blue">{{ $project->category }}</p>
                    @endif

                    <h3>{{ $project->title }}</h3>

                    <p>{{ $project->short_description }}</p>

                    <p>
                        <a href="/projects/{{ $project->slug }}">View case study</a>
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
    @else
        <div class="card">
            <p>No projects have been added yet.</p>
        </div>
    @endif
</div>
@endsection