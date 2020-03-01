<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vocab_answer extends Model
{
  protected $table ="vocab_answer";
  protected $fillable = [
    'vocab1', 'vocab2', 'answer'
  ];
}
