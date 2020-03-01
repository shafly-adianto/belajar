<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VocabVerb extends Migration
{

      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
        Schema::create('vocab_verb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vocab');
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
          Schema::dropIfExists('vocab_verb');
      }
}
