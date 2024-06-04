<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\File;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all(); // Select * from mahasiswa
        return view('mahasiswa.index')
                ->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        $kota = Kota::all();
        return view('mahasiswa.create')
            ->with('prodi', $prodi)
            ->with('kota', $kota);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request)

        // validasi data input
        $val = $request->validate([
            'npm' => 'required|unique:mahasiswas', 
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'prodi_id' => 'required',
            'kota_id' => 'required',
            'url_foto' => '',
        ]);
        // simpan ke dalam tabel mahasiswa
        mahasiswa::create($val);
        // redirect ke mahasiswa
        return redirect()->route('mahasiswa.index')->with('success', $val['nama'] . ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
        File::delete('foto/'.$mahasiswa['url_foto']); // file dihapus
        $mahasiswa->delete(); // data mahasiswa dihapus
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
        
    }
}
