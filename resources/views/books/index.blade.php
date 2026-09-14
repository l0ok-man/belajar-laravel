@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    {{ route('buku') }}

    <ul>
    @foreach ($books as $book)
        <li>{{ $book['judul'] }} - {{ $book['penulis'] }} - {{ $book['tahun'] }}</li>
    @endforeach
    </ul>

    @if ($stock > 0)
        <p>Stok Tersedia</p>
    @else
        <p>Stok Habis</p>
    @endif
@endsection