<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFilepdfScreenshotToRegisterKaryawans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register_karyawans', function (Blueprint $table) {
            $table->string('filepdf')->nullable();
            $table->string('screenshot')->nullable();
            $table->string('fotodiri')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('register_karyawans', function (Blueprint $table) {
            $table->dropColumn('filepdf');
            $table->dropColumn('screenshot');
        });
    }
}
