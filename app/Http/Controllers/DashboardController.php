<?php

namespace App\Http\Controllers;

use App\Models\CommunityEvent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $events = CommunityEvent::all();

        return view('dashboard', compact('events'));
    }
}