<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        return view('lessons.index', compact('lessons'));
    }

    public function create()
    {
        return view('lessons.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required',
            'title' => 'required',
            'description' => 'nullable',
            'content' => 'nullable',
        ]);

        Lesson::create($validated);
        return redirect()->route('lessons.index')->with('success', 'Lesson created successfully!');
    }

    public function show(Lesson $lesson)
    {
        return view('lessons.show', compact('lesson'));
    }

    public function edit(Lesson $lesson)
    {
        if (Auth::check()) {
            return view('lessons.edit', compact('lesson'));
        } else {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }

    }

    public function update(Request $request, Lesson $lesson)
    {
        $validated = $request->validate([
            'number' => 'required',
            'title' => 'required',
            'description' => 'nullable',
            'content' => 'nullable',
        ]);

        $lesson->update($validated);
        return redirect()->route('lessons.index')->with('success', 'Lesson updated successfully!');
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('lessons.index')->with('success', 'Lesson deleted successfully!');
    }

}
