<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kota = Kota::all(); // Select * from kota
        return view('kota.index')
                 ->with('kota', $kota);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('kota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request)

        // validasi data input
        $val = $request->validate([
            'nama' => 'required|unique:kota', 
        ]);
        // simpan ke dalam tabel kota
        Kota::create($val);
        // redirect ke kota
        return redirect()->route('kota.index')->with('success', $val['nama'] . ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kota $kota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kota $kota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kota $kota)
    {
        //
    }
}
