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
            UsersTableSeeder::class,
            SkillsTableSeeder::class,
            ColorsTableSeeder::class,
            SkillUserTableSeeder::class,
            FollowersTableSeeder::class
        ]);
    }
}
