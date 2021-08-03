<?php


use App\Author;
use App\User;
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
        factory(User::class, 2)->create();
        factory(Author::class, 10)->create();
//        factory(Books::class,10)->create();
    }
}
