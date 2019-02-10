<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Portfolio;
use App\Education;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users[] = User::create([
            'first_name' => 'Nikola',
            'last_name' => 'Mitrovic',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'phone' => '0649770819',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'image' => 'img/devojka.jpg',
            'position' => "Php programmer - Laravel",
            'bio' => 'See my work inside :)',
            'color_id' => 4
        ]);
        $users[] = User::create([
            'first_name' => 'Andjela',
            'last_name' => 'Stojanovic',
            'email' => 'andjela@gmail.com',
            'email_verified_at' => now(),
            'phone' => '0654542895',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'image' => 'img/1548438345.png',
            'position' => 'Front programmer',
            'bio' => 'Front programmer at FreSide.',
            'color_id' => 1
        ]);
        $users[] = User::create([
            'first_name' => 'Danny Milosevic',
            'last_name' => 'Mitrovic',
            'email' => 'danny@gmail.com',
            'email_verified_at' => now(),
            'phone' => '062779960',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'image' => 'img/decko.jpeg',
            'position' => 'Graphic designer',
            'bio' => 'Working a lot :D nedd a vacation :)',
            'color_id' => 2
        ]);
        $users[] = User::create([
            'first_name' => 'Zorana',
            'last_name' => 'Djordjevic',
            'email' => 'zoka@gmail.com',
            'email_verified_at' => now(),
            'phone' => '06598712563',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'image' => 'img/profile.jpeg',
            'position' => 'Bussiness and strategy',
            'bio' => 'Unemployed',
            'color_id' => 5
        ]);
        $users[] = User::create([
            'first_name' => 'Dejan',
            'last_name' => 'Popovic',
            'email' => 'deki@gmail.com',
            'email_verified_at' => now(),
            'phone' => '06598712563',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'image' => 'img/profile.jpeg',
            'position' => 'Logistics manager',
            'bio' => 'Unemployed',
            'color_id' => 1
        ]);
        $users[] = User::create([
            'first_name' => 'Nikola',
            'last_name' => 'Zecevic',
            'email' => 'zeka@gmail.com',
            'email_verified_at' => now(),
            'phone' => '06598712563',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'image' => 'img/profile.jpeg',
            'position' => 'Executive developer',
            'bio' => 'Executive developer',
            'color_id' => 4
        ]);

        foreach ($users as $user)
        {
            $user->schools()->save(factory(App\Education::class)->make());
            $user->portfolios()->save(factory(App\Portfolio::class)->make());
        }

        factory(App\User::class, 15)->create()->each(function ($user) {
            $user->schools()->save(factory(App\Education::class)->make());
            $user->portfolios()->save(factory(App\Portfolio::class)->make());
        });
    }
}
