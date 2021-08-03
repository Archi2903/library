<?php

use App\Authors;
use App\Books;
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
        factory(Authors::class,10)->create();
//        factory(Books::class,10)->create();
    }
}
