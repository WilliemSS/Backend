<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table='dosen';
    protected $primaryKey = 'Id_dosen'; // Setting Id_dosen as the primary key
    public $incrementing = true; // Enable auto-increment for Id_dosen
    protected $fillable = ['NID', 'Nama_depan', 'Nama_belakang', 'Alamat','No_telp','Nama_matkul']; // Fillable fields

    public $timestamps=false;

}
