<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    protected $table = 'skripsi';
    protected $primaryKey = 'id_skripsi';
    //Field yang hanya boleh diisi
    protected $fillable = ['id_skripsi','nim','nama_mahasiswa','judul','tempat_penelitian','alamat'];

    //Field yang diabaikan isiannya
    protected $guarded = [];
    
    public function skripsi()
   {
    return $this->hasOne('App\Skripsi','kode_prodi','prodi');
   }
}