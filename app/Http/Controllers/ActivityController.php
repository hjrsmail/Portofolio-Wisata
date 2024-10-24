<?php

namespace App\Http\Controllers;

use App\Models\Activity; 
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $activities = Activity::when($search, function ($query) use ($search) {
            return $query->where('title', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
        })->paginate(9); // Sesuaikan jumlah per halaman jika perlu

        return view('activities.index', compact('activities'));
    }


    public function show($slug)
    {
        $activity = Activity::where('slug', $slug)->firstOrFail();
        $activity->description = linkify($activity->description); // Memanggil helper
        return view('activities.show', compact('activity'));
    }

}

