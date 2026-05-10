<?php
use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

Route::get('/', function () {
    $featuredProjects = Project::where('featured', true)
        ->latest()
        ->take(3)
        ->get();

    return view('home', compact('featuredProjects'));
});

Route::get('/projects', function () {
    $projects = Project::latest()->get();

    return view('projects.index', compact('projects'));
});

Route::get('/projects/{slug}', function ($slug) {
    $project = Project::where('slug', $slug)->firstOrFail();

    return view('projects.show', compact('project'));
});

Route::get('/skills', function () {
    $skills = Skill::orderBy('category')
        ->orderBy('sort_order')
        ->get()
        ->groupBy('category');

    return view('skills.index', compact('skills'));
});
Route::get('/experience', function () {
    $experiences = Experience::orderBy('sort_order')->latest()->get();

    return view('experience.index', compact('experiences'));
});
Route::get('/education', function () {
    $education = Education::orderBy('sort_order')->get();

    return view('education.index', compact('education'));
});
Route::get('/contact', function () {
    return view('contact.index');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string|max:5000',
    ]);

    ContactMessage::create($validated);

    return back()->with('success', 'Thank you. Your message has been sent successfully.');
});
Route::get('/csym036-portfolio', function () {
    $featuredProjects = Project::where('featured', true)
        ->latest()
        ->take(6)
        ->get();

    $skills = Skill::orderBy('category')
        ->orderBy('sort_order')
        ->get()
        ->groupBy('category');

    $experiences = Experience::orderBy('sort_order')
        ->get();

    $education = Education::orderBy('sort_order')
        ->get();

    return view('csym036.index', compact(
        'featuredProjects',
        'skills',
        'experiences',
        'education'
    ));
});
Route::get('/cv', function () {
    return view('cv.index');
});
Route::get('/about', function () {
    return view('about.index');
});