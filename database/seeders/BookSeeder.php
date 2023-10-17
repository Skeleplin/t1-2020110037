<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Book::create([
            'isbn' => '1234567890123',
            'judul' => 'Contoh Buku 1',
            'halaman' => 200,
            'kategori' => 'novel',
            'penerbit' => 'Penerbit A',
        ]);

        \App\Models\Book::create([
            'isbn' => '9876543210987',
            'judul' => 'Contoh Buku 2',
            'halaman' => 250,
            'kategori' => 'education',
            'penerbit' => 'Penerbit B',
        ]);
    }
}
