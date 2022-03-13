<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama_barang');
            $table->string('bangunan_id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('kategori_id');
            $table->string('merk');
            $table->string('no_seri');
            $table->string('kondisi');
            $table->date('tgl_pengadaan');
            $table->string('sumber_perolehan');
            $table->integer('harga_perolehan');
            $table->integer('jumlah');
            $table->integer('satuan');
            $table->string('nilai_residu');
            $table->string('umur_ekonomis');
            $table->string('status');
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
        Schema::dropIfExists('barangs');
    }
}
