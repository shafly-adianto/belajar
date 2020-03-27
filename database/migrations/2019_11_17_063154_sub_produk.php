<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sub_produk', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('id_produk');
          $table->string('nama_sub_produk');
          $table->text('deskripsi');
          $table->timestamps();

          $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_produk');
    }
}
