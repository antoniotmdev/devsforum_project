<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\User::factory(10)->create();
         Community::factory(10)->create();
         Post::factory(50)->create();
        //$this->call(CommunitySeeder::class);
       // $this->call(PostSeeder::class);
    }
}
