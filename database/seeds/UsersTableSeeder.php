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
        $usuario = new \App\User();
        $usuario->name = "User";
        $usuario->email = "user@user.com";
        $usuario->password = bcrypt("123456");
        $usuario->save();
    }
}
