@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                     <h4 class="card-title">Tambah Mahasiswa</h4>
                    <p class="card-description">
                        Formulir Tambah Data Mahasiswa
                    </p>
                    <form class="forms-sample" action="{{ route('mahasiswa.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                            <label for="npm" class="col-sm-3 col-form-label">NPM Mahasiswa</label>
                            <input type="text" name="npm" id="" value="{{old('npm')}}" class="form-control" autocomplete="off"> 
                                @error('npm')
                                <span ></span>{{$message}}
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" id="" value="{{old('nama')}}" class="form-control" autocomplete="off"> 
                                @error('nama')
                                <span ></span>{{$message}}
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir Mahasiswa</label>
                            <input type="text" name="tempat_lahir" id="" value="{{old('tempat_lahir')}}" class="form-control" autocomplete="off"> 
                                @error('tempat_lahir')
                                <span ></span>{{$message}}
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir Mahasiswa</label>
                            <input type="text" name="tanggal_lahir" id="" value="{{old('tanggal_lahir')}}" class="form-control" autocomplete="off"> 
                                @error('tanggal_lahir')
                                <span ></span>{{$message}}
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat Mahasiswa</label>
                            <input type="text" name="alamat" id="" value="{{old('alamat')}}" class="form-control" autocomplete="off"> 
                                @error('alamat')
                                <span ></span>{{$message}}
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="prodi" class="col-sm-3 col-form-label">Nama Prodi</label>
                            <select name="prodi_id" id="" class="form-control">
                            @foreach ($prodi as $item)
                            <option value="{{$item['id']}}"> {{ $item['nama']}} </option>
                            @endforeach
                            </select>
                            @error('prodi_id')
                            <span ></span>{{$message}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kota" class="col-sm-3 col-form-label">Nama Kota</label>
                            <select name="kota_id" id="" class="form-control">
                            @foreach ($kota as $item)
                            <option value="{{$item['id']}}"> {{ $item['nama']}} </option>
                            @endforeach
                            </select>
                            @error('kota_id')
                            <span ></span>{{$message}}
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection