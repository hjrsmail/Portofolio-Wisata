<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tourism;
use Illuminate\Support\Str;

class TourismSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tourisms = Tourism::all();

        foreach ($tourisms as $tourism) {
            $tourism->slug = Str::slug($tourism->title, '-'); 
            $tourism->save(); // Simpan perubahan
        }
    }


}
