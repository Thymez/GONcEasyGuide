<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function create()
    {
        return view('promotion.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('promotion-images');

        Promotion::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_url' => $imagePath,
        ]);

        return redirect()->route('promotion.create')->with('success', 'Promotion created successfully!');
    }
}
