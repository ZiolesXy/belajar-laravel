<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::insert([
            ['title' => 'Gempa Magnitudo 6,3 Guncang Sulawesi, Tak Berpotensi Tsunami', 'slug' => 'gempa-magnitudo-6-3-guncang-sulawesi', 'author' => 'Pasha Prabasakti', 'body' => 'Sulawesi — Gempa bumi dengan magnitudo 6,3 mengguncang wilayah Sulawesi Tengah pada Selasa pagi pukul 03.12 WITA. Berdasarkan data dari BMKG, pusat gempa berada di laut, 45 km tenggara Kabupaten Banggai, dengan kedalaman 10 km. Meski getaran dirasakan cukup kuat di beberapa wilayah, BMKG memastikan gempa ini tidak berpotensi tsunami. Warga diminta tetap tenang namun waspada terhadap kemungkinan gempa susulan.'],
            ['title' => 'Harga Beras Melonjak di Pasar Tradisional, Pemerintah Siapkan Operasi Pasar', 'slug' => 'harga-beras-melonjak-di-pasar-tradisional', 'author' => 'Dina Kusuma', 'body' => 'Jakarta — Harga beras medium dan premium mengalami lonjakan dalam sepekan terakhir di sejumlah pasar tradisional Jakarta. Kenaikan harga mencapai Rp2.000 per kilogram, yang dipicu oleh berkurangnya pasokan dari petani akibat cuaca ekstrem. Pemerintah melalui Bulog akan melakukan operasi pasar guna menstabilkan harga dan menjamin ketersediaan beras bagi masyarakat.'],
            ['title' => 'Timnas U-23 Lolos ke Semifinal Piala Asia Setelah Tumbangkan Korea Selatan', 'slug' => 'timnas-u-23-lolos-ke-semifinal-piala-asia', 'author' => 'Rafi Akbar', 'body' => 'Doha — Timnas Indonesia U-23 mencetak sejarah baru dengan lolos ke semifinal Piala Asia U-23 2025 setelah menaklukkan Korea Selatan melalui adu penalti dengan skor 5-4. Pertandingan yang digelar di Stadion Abdullah bin Khalifa berlangsung sengit dan penuh tensi. Kiper Ernando Ari menjadi pahlawan dengan menyelamatkan dua penalti. Pelatih Shin Tae-yong menyatakan bangga dengan kerja keras para pemain dan meminta masyarakat terus memberikan dukungan.'],
    ]);
    }
}
