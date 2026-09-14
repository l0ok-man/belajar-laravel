@extends('layouts.app')

@section('title', 'Library System Dashboard')

@section('content')

    <h1>Library System Dashboard</h1>
    <p>Selamat datang di Sistem Informasi Perpustakaan</p>

    <ul>
    @foreach ($books as $book)
        <li>Jumlah Buku: {{ $book }}</li>
    @endforeach
    </ul>

    <br> 

    <ul>
    @foreach ($members as $member)
        <li>Jumlah Member: {{ $member }}</li>
    @endforeach
    </ul>

    <br>

    <ul>
    @foreach ($categories as $category)
        <li>Jumlah Kategori: {{ $category }}</li>
    @endforeach
    </ul>
@endsection