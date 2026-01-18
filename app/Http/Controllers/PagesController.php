<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function store_contact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name'        => $validated['name'],
            'email'       => $validated['email'],
            'phone'       => $validated['phone'] ?? null,
            'subject'     => $validated['subject'],
            'message'     => $validated['message'],
            'submit_date' => now()->format('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->back()
            ->with('success', 'Thank you! Your inquiry has been submitted successfully.');
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('pages.gallery', compact('galleries'));
    }

    public function question_answer()
    {
        $question_answers = QuestionAnswer::all();
        return view('pages.question_answer', compact('question_answers'));
    }

    public function services()
    {
        return view('pages.services');
    }

    public function programs()
    {
        return view('pages.programs');
    }

    public function about()
    {
        return view('pages.about');
    }
}
