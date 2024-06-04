@extends('layout.main')

@section('title', 'Daftar Kota')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                     <h4 class="card-title">Tambah Kota</h4>
                    <p class="card-description">
                        Formulir Tambah Kota
                    </p>
                    <form class="forms-sample" action="{{ route('kota.store') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <input type="text" name="nama" id="" value="{{old('nama')}}" class="form-control" autocomplete="off"> 
                                @error('nama')
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