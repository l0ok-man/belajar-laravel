<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Andi',
            'year' => 2004,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Budi',
            'year' => 2023,
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Basis Data',
            'author' => 'Citra',
            'year' => 2024,
            'stock' => 15,
        ]);

        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Dewi',
            'year' => 2025,
            'stock' => 20,  
        ]);

        Book::create([
            'title' => 'Pemrograman Berorientasi Objek',
            'author' => 'Eko',
            'year' => 2026,
            'stock' => 25,
        ]);
    }
}
