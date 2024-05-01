<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $primaryKey = 'Id_mahasiswa'; // Setting Id_matkul as the primary key
    public $incrementing = true; // Enable auto-increment for Id_matkul
    protected $fillable = ['NIM', 'Nama_depan', 'Nama_belakang', 'Alamat','No_telp','Jurusan']; // Fillable fields

    public $timestamps=false;

 

}
