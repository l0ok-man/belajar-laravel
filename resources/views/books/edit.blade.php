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

        <div>
            <label>Kategori Buku</label>
            <select name="category_id">
                <option value="">Pilih Kategori</option>

                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @selected(old('category_id', $book->category_id) == $category->id)
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            @error('category_id')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
@endsection 