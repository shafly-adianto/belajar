<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fitur_produk extends Model
{
  protected $table ="fitur_produk";
  protected $fillable = [
      'id_sub_produk', 'fitur',
  ];
}
