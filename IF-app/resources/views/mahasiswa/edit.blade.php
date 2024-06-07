@extends('layout.main')
@section('title', 'Tambah Mahasiswa')
@section('content')
    <h2>Daftar prodi</h2>
    <p>Ini halaman Tambah Mahasiswa</p>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Default form</h4>
                <p class="card-description">
                  Basic form layout
                </p>
                <form class="forms-sample" action="{{  route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <label for="npm">Nomor Pokok Mahasiswa</label>
                        <input type="text" class="form-control" name="npm" id="" value="{{ old['npm'] ? old('npm') : $mahasiswa['npm'] }}" class="form-control: readOnly">
                        @error('npm')
                            <span class="text-danger">{{ $message}} </span>
                        @enderror
                    </div>
                  {{-- NPM --}}
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control" name="npm" placeholder="npm" value="{{ old('npm') }}">
                        @error('npm')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  {{-- tempat lahir --}}
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                            {{ $message }}
                        @enderror
                    </div>
                  {{-- tanggal Lahir --}}
                    <div class="form-group">
                        <label for="tanggal_lahir">tanggal lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                            {{ $message }}
                        @enderror
                    </div>
                  {{-- alamat --}}
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                            {{ $message }}
                        @enderror
                        </div>
                    {{-- kota --}}
                    <div class="form-group">
                      <label for="kota_id">Kota lahir</label>
                      <select name="kota_id" id="" class="form-control" placeholder="Palembang">
                          @foreach ($kota as $kotas)
                              <option value="{{ $kotas["id"] }}" {{ (old('kota_id') == $kotas ['id'] ? 'selected' : ($mahasiswa['kota_id'] == $kotas['id'] ? 'selected' : null)) }}> {{ $kotas["nama"] }} </option>
                          @endforeach
                      </select>
                      @error('kota_id')
                          {{ $message }}
                      @enderror
                    {{-- prodi --}}
                     <div class="form-group">
                      <label for="prodi_id">Program Studi</label>
                      <select name="prodi_id" id="" class="form-control" placeholder="prodi_id Teknik">
                          @foreach ($prodi as $item)
                              <option value="{{ $item["id"] }}" {{ (old('prodi_id') == $item('id') ? 'selected' : $mahasiswa['prodi_id'] == $item['id'] ? 'selected' : null)}} >{{ $item["nama"]}}> {{ $prot["nama"] }}> <{{ $item["nama"]}} /option>
                          @endforeach
                      </select>
                      @error('prodi_id')
                          {{ $message }}
                      @enderror
                    </div>
                    {{-- url foto --}}
                    <div class="form-group">
                      <label for="url_photos">File Foto</label>
                      <input type="file" class="form-control" name="url_photos"  >
                      @error('url_photos')
                          {{ $message }}
                      @enderror
                    </div>
                
                
                  <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                  <a href="{{ url('mahasiswa') }}" class="btn btn-light">Back</a>
                
                </form>
              </div>
            </div>
          </div>
      </div>
@endsection