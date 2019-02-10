<?php

use Illuminate\Database\Seeder;
use App\User;

class SkillUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(3);

        $user->skills()->attach( 3 ,['rating' => 7]);
        $user->skills()->attach( 7 ,['rating' => 10]);
        $user->skills()->attach( 75 ,['rating' => 7]);
        $user->skills()->attach( 10 ,['rating' => 10]);
    }
}
