@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mahasiswa</h4>
                  <p class="card-description">
                    List data Mahasiswa
                  </p>
                  <a href="{{ url('mahasiswa/create') }}" class="btn btn-dark btn-rounded btn-fw">Tambah</a>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>NPM</th>
                          <th>Nama</th>
                          <th>Prodi</th>
                          <th>Kota</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{  $item['nama'] }} </td>
                            <td>{{ $item['fakultas']['nama'] }} </td> <br>
                        </tr>
                        <a href="{{ url('mahasiswa/create') }}" class="btn btn-dark btn-rounded btn-fw">Edit</a>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
   

@endsection