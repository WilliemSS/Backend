<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftar_pengajar',function (Blueprint $table){
            $table->increments('Id_pengajar');
            $table->integer('NIM');
            $table->string('Nama_mahasiswa',100);
            $table->string('Nama_matkul',50);
            $table->integer('SKS');
            $table->integer('NID');
            $table->string('Nama_dosen',100);

            //Define foreign key
            $table->foreign('NIM')->references('NIM')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('NID')->references('NID')->on('dosen')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_pengajar');
    }
};
