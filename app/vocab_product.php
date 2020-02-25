<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vocab_product extends Model
{
  protected $table ="vocab_product";
  protected $fillable = [
      'vocab'
  ];
}
