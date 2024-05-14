@extends('layout.main')

@section('title', 'Daftar Fakultas')

@section('content')
    <h2>Tambah Fakultas</h2>
    <p>Ini halaman tambah fakultas</p>
    <form action="{{ route('fakultas.store')}}" method="post">
    @csrf
    Nama fakultas
    <input type="text" name="nama" id="" value="{{old('nama')}}"> 
    @error('nama')
        {{$message}}
    @enderror
    <br>

    <input type="text" name="singkatan" id="" value="{{old('singkatan')}}"> 
    @error('singkatan')
        {{$message}}
    @enderror
    <br>
    <button type="submit">Simpan</button>
    </form>
@endsection