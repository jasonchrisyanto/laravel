@extends('layout.main')

@section('title', 'Daftar Fakultas')

@section('content')
    <h2>Daftar Fakultas</h2>
    <p>Ini halaman daftar fakultas</p>

    @foreach ($prodi as $item)
    {{  $item['nama'] }} {{ $item['fakultas']['nama'] }} {{ $item ['fakultas']['nama']}}<br>
    @endforeach
@endsection