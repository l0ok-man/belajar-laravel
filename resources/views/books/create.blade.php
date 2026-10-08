@extends('layouts.app')

@section('title', $title)

@section('content') 
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <input type="text" name="title" placeholder="Judul">
        <input type="text" name="author" placeholder="Penulis">
        <input type="number" name="year" placeholder="Tahun">
        <input type="number" name="stock" placeholder="Stok">

        <button type="submit">Tambah Buku</button>
    </form>
@endsection 