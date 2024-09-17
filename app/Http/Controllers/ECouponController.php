<?php

namespace App\Http\Controllers;

use App\Models\ECoupon;
use Illuminate\Http\Request;

class ECouponController extends Controller
{
    public function create()
    {
        return view('e-coupon.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('e-coupon-images');

        ECoupon::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_url' => $imagePath,
        ]);

        return redirect()->route('e-coupon.create')->with('success', 'E-Coupon created successfully!');
    }
}
