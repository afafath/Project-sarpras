<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangunans', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('gedung_id');
            $table->string('nama_bangunan');
            $table->date('tgl_pembangunan');
            $table->string('lantai')->nullable();
            $table->string('panjang_bangunan');
            $table->string('lebar_bangunan');
            $table->string('panjang_selasar')->nullable();
            $table->string('lebar_selasar')->nullable();
            $table->string('no_basts')->nullable();
            $table->date('tgl_basts')->nullable();
            $table->binary('file_basts')->nullable();
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
        Schema::dropIfExists('bangunans');
    }
}
