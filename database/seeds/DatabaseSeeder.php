<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          vocab_greetings_seeder::class,
          vocab_how_seeder::class,
          vocab_product_seeder::class,
          vocab_time_seeder::class,
          vocab_verb_seeder::class,
          vocab_answer_seeder::class
        ]);
    }
}
