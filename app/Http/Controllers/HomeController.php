<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Http\Request;
use App\Models\Culinary;
use App\Models\Tourism;
use App\Models\Activity;
use App\Models\Galery;
use App\Models\News;

class HomeController extends BaseController
{
    public function index()
    {
        // Memeriksa apakah model Culinary ada
        if (class_exists(Culinary::class)) {
            $culinaries = Culinary::all(); // Mengambil semua data kuliner
        } else {
            return "Culinary model not found."; // Pesan error jika model tidak ditemukan
        }

        // Memeriksa apakah model Tourism ada
        if (class_exists(Tourism::class)) {
            $tourisms = Tourism::limit(6)->get(); // Mengambil semua data wisata
        } else {
            return "Tourism model not found."; // Pesan error jika model tidak ditemukan
        }


        if (class_exists(Activity::class)) {
            $activities = Activity::all(); // Mengambil semua data kegiatan
        } else {
            return "Activity model not found.";
        }

        if (class_exists(News::class)) {
            $news = News::all(); // Mengambil semua data kegiatan
        } else {
            return "News model not found.";
        }

        if (class_exists(Galery::class)) {
            $galeries = Galery::all(); // Mengambil semua data kegiatan
        } else {
            return "Galery model not found.";
        }




        return view('index', compact('culinaries', 'tourisms', 'activities', 'news', 'galeries')); // Kirim ke view index
    
    }

    public function showAll()
{
    $galeries = Galery::all(); // Mengambil semua gambar dari database
    return view('galeri.showAll', compact('galeries'));
}





}
