@extends('layouts.app')

@section('title', $book['judul'])

@section('content')
    <h1>{{ $book['judul'] }}</h1>
    <p>Penulis: {{ $book['penulis'] }}</p>
    <p>Tahun: {{ $book['tahun'] }}</p>
@endsection