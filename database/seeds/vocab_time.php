<?php

use App\vocab_time;
use Illuminate\Database\Seeder;

class vocab_time_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\vocab_time::create(['vocab' => 'pagi']);
    }
}
