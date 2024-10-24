<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Str;

class NewsSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = News::all();

        foreach ($news as $news) {
            $news->slug = Str::slug($news->title, '-'); 
            $news->save(); // Simpan perubahan
        }
    }
}
