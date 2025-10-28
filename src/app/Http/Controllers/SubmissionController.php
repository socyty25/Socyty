<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{

    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('home')->with('error', 'You must log in first.');
        }

        $user = Auth::user();

        return view('dashboardpages.submit');
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('home')->with('error', 'You must log in first.');
        }

        $user = Auth::user();

        $validatedData = $request->validate([
            'game' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'question' => 'required|string',
            'answer' => 'required|string',
            'explanation' => 'nullable|string',
        ]);

        $submission = new Submission($validatedData);
        $submission->user_id = Auth::id();
        $submission->save();

        return redirect('/submission')->with('success', 'Submission created successfully!');
    }

    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('home')->with('error', 'You must log in first.');
        }

        $user = Auth::user();

        $submissions = Submission::where('user_id', Auth::id())->get();
        return view('dashboardpages.tracker', compact('submissions'));
    }

    // ... other methods (edit, update, delete) as needed, each with the Auth check
}
