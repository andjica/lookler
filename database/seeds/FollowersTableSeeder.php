<?php

use Illuminate\Database\Seeder;
use App\User;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);

        for ($i = 2; $i < 5; $i++)
        {
            $user->following()->attach($i);
        }

        $user = User::find(2);

        $user->following()->attach(1);
        $user->following()->attach(3);
        $user->following()->attach(4);
        $user->following()->attach(6);

        $user = User::find(3);

        $user->following()->attach(1);
        $user->following()->attach(2);
        $user->following()->attach(7);
    }
}
