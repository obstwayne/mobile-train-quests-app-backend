<?php

namespace App\Http\Controllers;

use App\Models\Achievements;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function store() {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'achieved' => 'required|boolean',
            // 'condition' => 'required|',
        ]);

        $profile = Achievements::create($validated);
        return response()->json($profile, 201);
    }
}
