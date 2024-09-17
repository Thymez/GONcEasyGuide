<?php

namespace App\Http\Controllers;

use App\Models\EVoucher;
use Illuminate\Http\Request;

class EVoucherController extends Controller
{
    public function create()
    {
        return view('e-voucher.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('e-voucher-images');

        EVoucher::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_url' => $imagePath,
        ]);

        return redirect()->route('e-voucher.create')->with('success', 'E-Voucher created successfully!');
    }
}

