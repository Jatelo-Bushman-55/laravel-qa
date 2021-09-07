<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\Question;
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
        // \App\Models\User::factory(10)->create();
        factory(App\Models\User::class,3)->create();/*->each(function($u){
            $u->questions()
              ->saveMany( 
                  factory(App\Question::class,rand(1,5))->make()
              ) ; 
        });*/
      
    }
}
