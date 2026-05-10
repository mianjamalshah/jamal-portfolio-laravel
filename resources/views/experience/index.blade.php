@extends('layouts.app')

@section('title', 'Experience | Mian Jamal Shah')

@section('extra_styles')
<style>
    .timeline {
        display: grid;
        gap: 24px;
    }
</style>
@endsection

@section('content')
<div class="container page">
    <p><a href="/">← Back to Home</a></p>

    <h1>Experience</h1>

    <p class="intro">
        My experience combines teaching, software development projects, operational coordination,
        client communication, and practical digital problem-solving.
    </p>

    <div class="timeline">
        @foreach($experiences as $experience)
            <div class="card">
                <h2>{{ $experience->job_title }}</h2>

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
                    <p>{!! nl2br(e($experience->description)) !!}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection