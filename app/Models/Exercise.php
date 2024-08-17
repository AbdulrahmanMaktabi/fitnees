<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'name', 'description', 'muscle_id'];
    public function muscle()
    {
        return $this->belongsTo(Muscle::class);
    }
    public function workouts()
    {
        return $this->belongsToMany(Workout::class, 'workout_exercises');
    }
}
