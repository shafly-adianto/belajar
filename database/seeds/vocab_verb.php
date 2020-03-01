<?php

use App\vocab_time;
use Illuminate\Database\Seeder;

class vocab_verb_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\vocab_verb::create(['vocab' => 'membeli']);
    }
}
