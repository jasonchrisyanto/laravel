<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['npm', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', '','prodi_id', 'kota_id', 'url_photos'];

    public function kota(){
        return $this->belongsTo(kota::class, 'kota_id');
}
    public function prodi(){
        return $this->belongsTo(prodi::class, 'prodi_id');
}
}