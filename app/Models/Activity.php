<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Activity extends Model
{
    use HasFactory, HasSlug;
    

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title') // Sumber untuk membuat slug
            ->saveSlugsTo('slug'); // Kolom tempat slug akan disimpan
    }
}
