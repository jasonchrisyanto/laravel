@extends('layout.main')

@section('title', 'Daftar Fakultas')

@section('content')
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pemmograman Studi</h4>
                  <p class="card-description">
                    List data prodi
                  </p>
                  <a href="{{ url('prodi/create') }}" class="btn btn-dark btn-rounded btn-fw">Tambah</a>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nama Prodi</th>
                          <th>Fakultas</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($prodi as $item)
                        <tr>
                            <td>{{  $item['nama'] }} </td>
                            <td>{{ $item['fakultas']['nama'] }} </td> <br>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection