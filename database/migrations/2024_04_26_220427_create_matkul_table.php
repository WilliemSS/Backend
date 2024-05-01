<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatkulTable extends Migration
{
    public function up()
    {
        Schema::create('matkul', function (Blueprint $table) {
            $table->increments('Id_matkul');
            $table->integer('Kd_matkul')->unique();
            $table->string('Nama_matkul', 50);
            $table->integer('SKS');
            $table->string('Jurusan', 3);

        });
    }

    public function down()
    {
        Schema::dropIfExists('matkul');
    }
}