@extends('layouts.app')

@section('title', $project->title . ' | Jamal Shah')

@section('content')
<div class="container page">
    <p><a href="/projects">← Back to Projects</a></p>

    @if($project->category)
        <p class="blue">{{ $project->category }}</p>
    @endif

    <h1>{{ $project->title }}</h1>

    <p class="intro">
        {{ $project->short_description }}
    </p>

    @if($project->full_description)
        <div class="card">
            <h2>Project Details</h2>
            <p>{!! nl2br(e($project->full_description)) !!}</p>
        </div>
    @endif

    @if($project->technologies)
        <div class="card" style="margin-top: 22px;">
            <h2>Technologies Used</h2>

            @foreach((array) $project->technologies as $technology)
                <span class="badge">{{ $technology }}</span>
            @endforeach
        </div>
    @endif

    @if($project->github_url || $project->live_url)
        <div class="card" style="margin-top: 22px;">
            <h2>Project Links</h2>

            @if($project->github_url)
                <a class="button" href="{{ $project->github_url }}" target="_blank">GitHub</a>
            @endif

            @if($project->live_url)
                <a class="button-secondary" href="{{ $project->live_url }}" target="_blank">Live Demo</a>
            @endif
        </div>
    @endif
</div>
@endsection