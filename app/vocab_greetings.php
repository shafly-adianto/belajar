<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vocab_greetings extends Model
{
  protected $table ="vocab_greetings";
  protected $fillable = [
      'vocab'
  ];
}
