<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title' => 'Pelatihan Manajemen Destinasi Wisata',
            'description' => 'Kegiatan Pelatihan Manajemen Destinasi Wisata Bahari dilaksanakan pada hari Sabtu, 7 September 2024. Diawali dengan pembukaan oleh Ketua Kelompok Sadar Wisata Kelurahan Lae-Lae, Bapak Sahaka.',
            'image' => 'img/berita1.jpg',
        ]);
        
        News::create([
            'title' => 'Sosialisasi Perilaku Hidup Bersih dan Sehat (PHBS)',
            'description' => 'Kegiatan kedua rangkaian pelaksanaan PKM Pengembangan Wisata Bahari Berbasis Teknologi Informasi di Pulau Lae-Lae, Kota Makassar adalah Sosialisasi Perilaku Hidup Bersih dan Sehat (PHBS) serta Pelatihan Memilah Sampah.',
            'image' => 'img/berita2.jpg',
        ]);
    }
}
