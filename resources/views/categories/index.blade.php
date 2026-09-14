@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')
    <h1>Kategori Buku</h1>

    <ul>
    @foreach ($categories as $category)
        <li>{{ $category }}</li>
    @endforeach
    </ul>
@endsection