<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_produk extends Model
{
  protected $table ="sub_produk";
  protected $fillable = [
      'id_produk','nama_sub_produk', 'deskripsi',
  ];
}
