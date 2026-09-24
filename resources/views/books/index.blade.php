@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    {{ route('buku') }}

    <ul>
    @foreach ($books as $book)
       <h3>{{ $book->title }}</h3>
       <p>Penulis: {{ $book->author }}</p>
       <p>Tahun: {{ $book->year }}</p>
       <p>Stok: {{ $book->stock }}</p>
    @endforeach
    </ul>

    @if ($stock > 0)
        <p>Stok Tersedia</p>
    @else
        <p>Stok Habis</p>
    @endif
@endsection