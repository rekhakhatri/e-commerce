<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'     => 'Rekha Khatri',
            'admin'    => 1,
            'email'    => 'rekhaaa144@gmail.com',
            'password' => bcrypt('123456'),
            'avatar'   => asset('avatars/E4.jpg')
        ]);
    }
}
