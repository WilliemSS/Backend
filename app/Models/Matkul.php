<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Matkul extends Model
{
    protected $table='matkul';
    protected $primaryKey = 'Id_matkul'; // Setting Id_matkul as the primary key
    public $incrementing = true; // Enable auto-increment for Id_matkul
    protected $fillable = ['Kd_matkul', 'Nama_matkul', 'SKS', 'Jurusan']; // Fillable fields

    public $timestamps=false;

  
}
