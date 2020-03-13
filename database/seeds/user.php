<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'regina',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
