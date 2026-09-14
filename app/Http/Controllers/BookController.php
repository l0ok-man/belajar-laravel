<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $title = "Daftar Buku";
        $description = "Daftar buku yang tersedia di perpustakaan";

        $books = [
            'Pemrograman PHP',
            'Laravel untuk Pemula',
            'Basis Data',
            'Algoritma dan Pemrograman',
            'Pemrograman Berorientasi Objek'
        ];

        $stock = 5;

        return view('books.index', compact('title','description','books', 'stock'));
    }

    public function show($id)
    {
        return "ID Buku: " . $id;
    }
}
