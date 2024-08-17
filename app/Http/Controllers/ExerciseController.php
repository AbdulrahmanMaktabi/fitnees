<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($muscle_id = null)
    {
        if (isset($muscle_id)) {
            $exercises = Exercise::where('muscle_id', $muscle_id)->get();
        } else {
            $exercises = Exercise::all();
        }

        return view('theme.exercises.exercises', compact('exercises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check() || Auth::user()->id != 3)
            abort(403);
        $muscles = \App\Models\Muscle::all();
        return view('theme.exercises.create', compact('muscles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check() || Auth::user()->id != 3)
            abort(403);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpeg,png,jpg|max:2048'],
            'muscle_id' => ['required', 'exists:muscles,id'],
        ]);

        // 1- get imag
        $image = $request->image;
        // 2- name replacement
        $newImageName = time() . "-" . $image->getClientOriginalName();
        // 3- move image to my project
        $image->storeAs('exercises', $newImageName, 'public'); // php artisan storge:link 
        // 4- save image new name to database
        $data['image'] = $newImageName; // Image Uploading

        Exercise::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $newImageName,
            'muscle_id' => $request->muscle_id,
        ]);

        return to_route('exercises.index')->with('create_success', 'Exercise created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercise $exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercise $exercise)
    {
        // Exercise::remove($exercise);
        if (Auth::check() && Auth::user()->id == 3) {
            if ($exercise->image && Storage::exists('public/exercises/' . $exercise->image)) {
                Storage::delete('public/exercises/' . $exercise->image);
            }
            $exercise->delete();
            return back()->with('delete_success', 'Exercise deleted successfully');
        }
        abort(403);
    }
}
