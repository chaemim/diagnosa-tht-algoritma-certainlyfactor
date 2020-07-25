<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = 'Ade Prast';
        $user->email = 'adecma18@gmail.com';
        $user->kontak = '081952892690';
        $user->password = bcrypt('password');
        $user->save();
    }
}
