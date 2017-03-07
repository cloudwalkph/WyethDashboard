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
        \App\User::create([
            'name'  => 'Admin Admin',
            'email' => 'admin@wyeth.com',
            'password' => bcrypt('password')
        ]);
    }
}
