@extends('layouts.app')

@section('title', 'CV | Mian Jamal Shah')
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

@section('extra_styles')
<style>
    iframe {
        width: 100%;
        height: 700px;
        border: 1px solid #1e293b;
        border-radius: 14px;
        margin-top: 24px;
        background: white;
    }

    @media (max-width: 700px) {
        iframe {
            height: 500px;
        }
    }
</style>
@endsection

@section('content')
<div class="container page">
    <p><a href="/">← Back to Home</a></p>

    <h1>CV</h1>

    <p class="intro">
        My CV summarises my education, technical skills, work experience, and projects relevant to
        software development, web development, AI, and placement opportunities.
    </p>

    <div class="card">
        <h2>Jamal Shah CV</h2>

        <p>
            You can download or view my CV using the links below.
        </p>

        <a class="button" href="/files/jamal-shah-cv.pdf" download>Download CV</a>
        <a class="button-secondary" href="/files/jamal-shah-cv.pdf" target="_blank">Open CV</a>

        <iframe src="/files/jamal-shah-cv.pdf"></iframe>
    </div>
</div>
@endsection