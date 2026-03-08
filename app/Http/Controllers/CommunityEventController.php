<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunityEvent;

class CommunityEventController extends Controller
{
    public function create()
    {
        return view('community-events.create');
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'venue' => ['required', 'string', 'max:255'],
        'date' => ['required'],
        'time' => ['required'],
        'banner_image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
    ]);

    $imagePath = $request->file('banner_image')->store('event-banners', 'public');

    CommunityEvent::create([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'venue' => $validated['venue'],
        'starts_at' => $validated['date'].' '.$validated['time'],
        'banner_image' => $imagePath,
    ]);

    return redirect('/dashboard')->with('success', 'Community event created successfully.');
}
}