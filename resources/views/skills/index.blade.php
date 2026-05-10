@extends('layouts.app')

@section('title', 'Skills | Mian Jamal Shah')

@section('extra_styles')
<style>
    .skill-top {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
    }

    .level {
        color: #94a3b8;
    }

    .bar {
        height: 8px;
        background: #1e293b;
        border-radius: 999px;
        overflow: hidden;
    }

    .fill {
        height: 100%;
        background: #38bdf8;
        border-radius: 999px;
    }

    .category-block {
        margin-bottom: 40px;
    }

    .category-block h2 {
        color: #facc15;
        margin-bottom: 18px;
    }
</style>
@endsection

@section('content')
<div class="container page">
    <p><a href="/">← Back to Home</a></p>

    <h1>Technical Skills</h1>

    <p class="intro">
        These skills reflect my current experience in software development, database-backed applications,
        web technologies, AI-related projects, cybersecurity practice, and cloud deployment.
    </p>

    @foreach($skills as $category => $items)
        <div class="category-block">
            <h2>{{ $category ?: 'Other Skills' }}</h2>

            <div class="grid">
                @foreach($items as $skill)
                    <div class="card">
                        <div class="skill-top">
                            <strong>{{ $skill->name }}</strong>
                            <span class="level">{{ $skill->level }}%</span>
                        </div>

                        <div class="bar">
                            <div class="fill" style="width: {{ $skill->level }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection