<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;
use Illuminate\Support\Str;

class ActivitySlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = Activity::all();

        foreach ($activities as $activity) {
            $activity->slug = Str::slug($activity->title, '-'); 
            $activity->save(); // Simpan perubahan
        }
    }
}
