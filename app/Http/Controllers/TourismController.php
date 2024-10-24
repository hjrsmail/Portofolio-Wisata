<?php

namespace App\Http\Controllers;

use App\Models\Tourism;
use Illuminate\Http\Request;

class TourismController extends Controller
{

    public function index()
    {
        $tourisms = Tourism::all(); // Mengambil semua objek wisata dari database
        return view('tourism.index', compact('tourisms')); // Mengirim data ke view
    }

    public function show($slug)
    {
        $tourism = Tourism::where('slug', $slug)->firstOrFail(); // Mengambil objek wisata berdasarkan ID
        $tourism->description = linkify($tourism->description);
        return view('tourism.show', compact('tourism')); // Mengirim data ke view
    }

}
