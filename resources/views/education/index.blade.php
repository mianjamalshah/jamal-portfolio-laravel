@extends('layouts.app')

@section('title', 'Education | Jamal Shah')

@section('extra_styles')
<style>
    .education-list {
        display: grid;
        gap: 24px;
    }
</style>
@endsection

@section('content')
<div class="container page">
    <p><a href="/">← Back to Home</a></p>

    <h1>Education</h1>

    <p class="intro">
        My academic background combines software engineering, computer science research,
        and current postgraduate study in computing with a focus on employability and placement preparation.
    </p>

    <div class="education-list">
        @foreach($education as $item)
            <div class="card">
                <h2>{{ $item->degree }}</h2>

                <p class="yellow">
                    {{ $item->institution }}
                    @if($item->location)
                        · {{ $item->location }}
                    @endif
                </p>

                <p class="small">
                    {{ $item->start_year ?: 'Start year not specified' }}
                    -
                    {{ $item->end_year ?: 'End year not specified' }}
                </p>

                @if($item->description)
                    <p>{!! nl2br(e($item->description)) !!}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection