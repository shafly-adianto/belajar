<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FiturProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fitur_produk', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('id_sub_produk');
          $table->text('fitur');
          $table->timestamps();

          $table->foreign('id_sub_produk')->references('id')->on('sub_produk')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fitur_produk');
    }
}
