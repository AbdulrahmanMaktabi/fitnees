<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


use function Ramsey\Uuid\v1;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workouts = Workout::all();
        return view('theme.programs', compact('workouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $exercises = \App\Models\Exercise::all();
        return view('theme.workout_create', compact('exercises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'level' => 'required|in:beginner,intermediate,advanced',
            'duration' => 'required|integer|min:1',
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'exercises' => 'required|array',
        ]);

        // 1- get imag
        $image = $request->image;
        // 2- name replacement
        $newImageName = time() . "-" . $image->getClientOriginalName();
        // 3- move image to my project
        $image->storeAs('workouts', $newImageName, 'public'); // php artisan storge:link 
        // 4- save image new name to database
        $data['image'] = $newImageName; // Image Uploading

        $data['exercises'] = json_encode($request->exercises);

        $workout = Workout::create($data);

        return redirect()->route('workouts.index')->with('create_success', 'Workout created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Workout $workout)
    {
        return view('theme.singleWorkout', compact('workout'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workout $workout)
    {
        return view('theme.workout_edit', compact('workout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workout $workout)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'level' => 'required|in:beginner,intermediate,advanced',
            'duration' => 'required|integer|min:1',
            'user_id' => 'required|exists:users,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // delete old image
            $oldImagePath = 'public/workouts/' . $workout->image;

            // Check if the image exists and delete it

            if (Storage::exists($oldImagePath)) {
                Storage::delete($oldImagePath);
            }
            // 1- get imag
            $image = $request->image;
            // 2- name replacement
            $newImageName = time() . "-" . $image->getClientOriginalName();
            // 3- move image to my project
            $image->storeAs('workouts', $newImageName, 'public'); // php artisan storge:link 
            // 4- save image new name to database
            $data['image'] = $newImageName; // Image Uploading
        }
        $workout->update($data);
        return redirect()->route('workouts.dashboard')->with('update_success', 'Workout updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workout $workout)
    {
        // delete image
        $oldImagePath = 'public/workouts/' . $workout->image;

        // Check if the image exists and delete it

        if (Storage::exists($oldImagePath)) {
            Storage::delete($oldImagePath);
        }

        $workout->delete();
        return redirect()->route('workouts.dashboard')->with('delete_success', 'Workout deleted successfully');
    }

    // dashboard
    public function dashboard()
    {

        $workouts = Workout::all();
        return view('theme.workout_dashboard', compact('workouts'));
    }
}
