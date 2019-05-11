<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id_barang');
            $table->string('namabarang');
            $table->integer('stok')->unsigned();
            $table->integer('harga')->unsigned();
            $table->text('deskripsi');
            $table->integer('id_merek')->unsigned();
            $table->foreign('id_merek')->references('id_merek')->on('merek')->onDelete('cascade');
            $table->timestamp('created_at')->nullable();        
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
