<?php

use App\vocab_greetings;
use Illuminate\Database\Seeder;


class vocab_greetings_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\vocab_greetings::create(['vocab' => 'hallo']);
    }
}
