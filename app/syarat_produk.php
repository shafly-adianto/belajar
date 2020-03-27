<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class syarat_produk extends Model
{
  protected $table ="syarat_produk";
  protected $fillable = [
      'id_sub_produk', 'syarat',
  ];
}
