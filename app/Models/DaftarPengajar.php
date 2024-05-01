<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPengajar extends Model
{
    protected $table='daftar_pengajar';
    protected $primaryKey='Id_pengajar';
    public $incrementing=true;


    protected $fillable=[
        'NIM',
        'Nama_mahasiswa',
        'Nama_matkul',
        'SKS',
        'NID',
        'Nama_dosen'
    ];
    public $timestamps=false;
    //Define relationship with other models
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class,'NIM','NIM');
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class,'NID','NID');
    }
}
