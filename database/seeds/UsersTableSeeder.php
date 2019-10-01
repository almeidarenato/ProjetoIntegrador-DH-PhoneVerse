<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(["id" => 1, "name" => "renato", "email" => "renatoam@ymail.com", "dtNascimento" => "1988-07-26 00:00:00", "password" => Hash::make('abirosvaldo'), 'nivelAcesso' => 1]);
        User::create(["id" => 2, "name" => "usuario", "email" => "usuario@email.com", "dtNascimento" => "1988-07-26 00:00:00", "password" => Hash::make('abirosvaldo'), 'nivelAcesso' => 0]);
    }
}
