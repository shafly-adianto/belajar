<?php

use App\vocab_how;
use Illuminate\Database\Seeder;

class vocab_how_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\vocab_how::create(['vocab' => 'cara']);
    }
}
