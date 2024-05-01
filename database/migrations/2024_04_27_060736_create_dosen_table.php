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
        Schema::create('dosen', function (Blueprint $table) {
            $table->increments('Id_dosen');
            $table->integer('NID')->unique();
            $table->string('Nama_depan', 50);
            $table->string('Nama_belakang',50);
            $table->string('Alamat', 50);
            $table->string('No_telp',15);
            $table->string('Nama_matkul',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
