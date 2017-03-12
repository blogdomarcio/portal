<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Admin();
        $usuario->name = "Marcio ADMIN";
        $usuario->email = "admin@admin.com";
        $usuario->password = bcrypt("123456");
        $usuario->save();
    }
}
