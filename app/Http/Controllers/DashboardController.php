<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $books = [
            'Pemrograman PHP',
            'Laravel untuk Pemula',
            'Basis Data',
            'Algoritma dan Pemrograman',
            'Pemrograman Berorientasi Objek',
            'Struktur Data',
            'Pengantar Cloud Computing',
            'Konsep Sistem Informasi'
        ];

        $members = [
            'Andi',
            'Budi',
            'Citra',
            'Dewi',
            'Eko'
        ];

        $categories = [
            'Pemrograman',
            'Basis Data',
            'Jaringan Komputer',
            'Sistem Informasi',
            'Algoritma'
        ];

        return view('dashboard.index', compact('books', 'members', 'categories'));
    } 
     
}
