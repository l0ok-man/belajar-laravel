@extends('layouts.app')

@section('title', $title)

@section('content') 
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" placeholder="Judul Buku" value="{{ $book->title }}">
        </div>

        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <div>
            <label>Penulis Buku</label>
            <input type="text" name="author" placeholder="Penulis" value="{{ $book->author }}">
        </div>

    
        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year" placeholder="Tahun" value="{{ $book->year }}">
        </div>

        @error('year')
            <p>{{ $message }}</p>
        @enderror

        <div>
            <label>Jumlah Stok Buku</label>
            <input type="number" name="stock" placeholder="Stok" value="{{ $book->stock }}">
        </div>

        @error('stock')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Update</button>
    </form>
@endsection 