<?php

use App\vocab_product;
use Illuminate\Database\Seeder;

class vocab_product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\vocab_product::create(['vocab' => 'emas']);
    }
}
