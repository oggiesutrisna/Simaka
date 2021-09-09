<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ttl');
            $table->string('gender');
            $table->string('email');
            $table->string('posisi');
            $table->string('alamat');
            $table->string('notelp');
            $table->string('pend_terakhir');
            $table->string('filepdf');
            $table->string('screenshot');
            $table->string('dapatinformasi');
            $table->string('bio');
            $table->string('tempat');
            $table->boolean('diterima')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_karyawans');
    }
}
