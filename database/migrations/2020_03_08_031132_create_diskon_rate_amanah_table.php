<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiskonRateAmanahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskon_rate_amanah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('lower_limit_percent',5,2);
            $table->double('upper_limit_percent',5,2);
            $table->double('diskon_rate',5,2);
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
        Schema::dropIfExists('diskon_rate_amanah');
    }
}
