@extends('layouts.app')

@section('title', 'Contact | Jamal Shah')

@section('extra_styles')
<style>
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.3fr;
        gap: 30px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #cbd5e1;
        font-weight: bold;
    }

    input,
    textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 13px;
        margin-bottom: 18px;
        border-radius: 10px;
        border: 1px solid #334155;
        background: #020617;
        color: #e5e7eb;
        font-size: 15px;
    }

    textarea {
        min-height: 150px;
        resize: vertical;
    }

    button {
        background: #38bdf8;
        color: #020617;
        border: none;
        padding: 13px 20px;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
    }

    .success {
        background: #064e3b;
        border: 1px solid #10b981;
        color: #d1fae5;
        padding: 14px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .error {
        background: #7f1d1d;
        border: 1px solid #ef4444;
        color: #fee2e2;
        padding: 12px;
        border-radius: 10px;
        margin-bottom: 12px;
    }

    @media (max-width: 800px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
<div class="container page">
    <p><a href="/">← Back to Home</a></p>

    <h1>Contact</h1>

    <p class="intro">
        You can contact me for placement opportunities, project discussion, collaboration,
        or feedback on my portfolio.
    </p>

    <div class="contact-grid">
        <div class="card">
            <h2>Contact Details</h2>

            <p><strong>Email:</strong><br>
                jamalshah963@gmail.com
            </p>

            <p><strong>Location:</strong><br>
                Northampton, United Kingdom
            </p>

            <p><strong>Looking for:</strong><br>
                Software development, web development, AI, or cybersecurity-related placement roles.
            </p>

            <p><strong>Links:</strong><br>
                <a href="https://www.linkedin.com/in/mianjamalshah963/" target="_blank">GitHub</a><br>
                <a href="https://github.com/mianjamalshah" target="_blank">LinkedIn</a>
            </p>
        </div>

        <div class="card">
            <h2>Send a Message</h2>

            @if(session('success'))
                <div class="success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="error">{{ $error }}</div>
                @endforeach
            @endif

            <form method="POST" action="/contact">
                @csrf

                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>

                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" value="{{ old('subject') }}">

                <label for="message">Message</label>
                <textarea id="message" name="message" required>{{ old('message') }}</textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection



