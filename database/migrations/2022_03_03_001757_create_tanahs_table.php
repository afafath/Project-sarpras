<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanahs', function (Blueprint $table) {
            $table->string('id');
            $table->string('no_sertifikat');
            $table->string('nama_pemilik');
            $table->string('status');
            $table->string('luas');
            $table->string('sumber_perolehan');
            $table->date('tgl_perolehan');
            $table->string('letak_tanah');
            $table->string('batas_utara');
            $table->string('batas_barat');
            $table->string('batas_selatan');
            $table->string('batas_timur');
            $table->integer('harga');
            $table->string('penggunaan');
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
        Schema::dropIfExists('tanahs');
    }
}
