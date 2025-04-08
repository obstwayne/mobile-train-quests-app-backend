<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {}

    public function store() {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer',
            'experience' => 'required|integer'
        ]);

        $profile = Profile::create($validated);
        return response()->json($profile, 201);
    }
}
