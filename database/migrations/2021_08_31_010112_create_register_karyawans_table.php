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

    // membuat migrasi untuk table register_karyawans dengan nama table register_karyawans
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
            $table->string('dapatinformasi');
            $table->string('bio');
            $table->string('salary')->nullable();
            $table->string('jadwal')->default('belum ada jadwal');
            $table->string('waktu')->default('belum dipilih');
            $table->string('alasan')->default('belum ada alasan');
            $table->string('tempat')->default('belum penempatan');
            $table->string('diterima')->default('belum diterima');
            $table->string('role')->nullable();
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
