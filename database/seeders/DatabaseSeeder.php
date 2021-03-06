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
        \App\Models\User::factory(3)->create()->each(function($u){
            $u->questions()
              ->saveMany( 
                  \App\Models\Question::factory(5)->make()
              );
        });
      //  factory(App\Models\User::class,3)->create();
        /*->each(function($u){
            $u->questions()
              ->saveMany( 
                  factory(App\Question::class,rand(1,5))->make()
              ) ; 
        });*/
      
    }
}
