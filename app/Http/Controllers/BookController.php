<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $title = "Daftar Buku";
        $description = "Daftar buku yang tersedia di perpustakaan";
           

        $books = [
            [
                'judul' => 'Pemrograman PHP',
                'penulis' => 'Andi',
                'tahun' => 2022,
            ],
            [
                'judul' => 'Laravel untuk Pemula',
                'penulis' => 'Budi',
                'tahun' => 2023,
            ],
            [
                'judul' => 'Basis Data',
                'penulis' => 'Citra',
                'tahun' => 2024,
            ],
            [
                'judul' => 'Algoritma dan Pemrograman',
                'penulis' => 'Dewi',
                'tahun' => 2025,
            ],
            [
                'judul' => 'Pemrograman Berorientasi Objek',
                'penulis' => 'Eko',
                'tahun' => 2026,
            ],
        ];

        $stock = 7;

        return view('books.index', compact('title','description','books', 'stock'));
    }

    public function show($id)
    {
        return "ID Buku: " . $id;
    }
}
