@extends('layout.main')

@section('title', 'Daftar Fakultas')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Tambah Fakultas</h4>
                        <p class="card-description">
                            Formulir Tambah Fakultas
                        </p>
                        <form class="forms-sample">
                            <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <input type="text" name="nama" id="" value="{{old('nama')}}"> 
                                @error('nama')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group row">
                            <label for="singkatan" class="col-sm-3 col-form-label">Singkatan</label>
                            <input type="text" name="singkatan" id="" value="{{old('singkatan')}}"> 
                                @error('singkatan')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                            </div>
                            </div>
                            <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                            <i class="input-helper"></i></label>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                        </div>
                    </div>
                    </div>
@endsection