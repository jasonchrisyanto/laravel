@extends('layout.main')

@section('title', 'Daftar Prodi')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                     <h4 class="card-title">Tambah Program Studi</h4>
                    <p class="card-description">
                        Formulir Tambah Program Studi
                    </p>
                    <form class="forms-sample" action="{{ route('prodi.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Pemograman Studi</label>
                            <input type="text" name="nama" id="" value="{{old('nama')}}" class="form-control" autocomplete="off"> 
                                @error('nama')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="fakultas" class="col-sm-3 col-form-label">Nama Fakultas</label>
                            <select name="fakultas_id" id="" class="form-control">
                            @foreach ($fakultas as $item)
                            <option value="{{$item['id']}}"> {{ $item['nama']}} </option>
                            @endforeach
                            </select>
                            @error('fakultas_id')
                            {{$message}}
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