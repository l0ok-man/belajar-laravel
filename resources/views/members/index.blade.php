@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')
    <h1>Daftar Member</h1>

    <ul>
    @foreach ($members as $member)
        <li>{{ $member }}</li>
    @endforeach
    </ul>
@endsection
