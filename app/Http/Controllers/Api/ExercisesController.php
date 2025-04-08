<?php

namespace App\Http\Controllers;

use App\Models\exercises;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    public function store() {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'target' => 'required|integer',
            'completed' => 'required|integer',
            'is_completed' => 'required|boolean',
            'last_completed_date' => 'required|date',
        ]);

        $profile = Exercises::create($validated);
        return response()->json($profile, 201);
    }
}
