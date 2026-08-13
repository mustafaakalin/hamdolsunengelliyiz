<?php

namespace App\Http\Controllers;

use App\Models\Hearing;
use App\Models\Orthopedic;
use App\Models\Spastic;
use App\Models\Spinalcord;
use App\Models\Vision;

class ReadmeController extends Controller
{
    public function show(string $slug)
    {
        $orthopedic = Orthopedic::where('slug', $slug)->get();
        $spinalcord = Spinalcord::where('slug', $slug)->get();
        $vision = Vision::where('slug', $slug)->get();
        $hearing = Hearing::where('slug', $slug)->get();
        $spastic = Spastic::where('slug', $slug)->get();

        return view('readme', compact('orthopedic', 'spinalcord', 'vision', 'hearing', 'spastic'));
    }
}
