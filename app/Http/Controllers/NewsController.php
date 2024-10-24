<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Menampilkan semua berita dengan fitur pencarian
    public function index(Request $request)
    {
        $search = $request->input('search');
        $news = News::where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->paginate(10); 

    return view('news.index', compact('news', 'search'));
    }
    
    public function show($slug)
        {
            // Temukan item berita berdasarkan ID
            $newsItem = News::where('slug', $slug)->firstOrFail();
            $newsItem->description = linkify($newsItem->description);
            // Kirimkan data ke view
            return view('news.show', compact('newsItem'));
        }

    


}
