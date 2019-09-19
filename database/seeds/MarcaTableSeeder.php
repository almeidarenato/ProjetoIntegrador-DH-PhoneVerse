<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create(["id" => 1, "nome" => "Apple"]);
        Marca::create(["id" => 2, "nome" => "Sony"]);
        Marca::create(["id" => 3, "nome" => "Asus"]);
        Marca::create(["id" => 4, "nome" => "LG"]);
        Marca::create(["id" => 5, "nome" => "Motorola"]);
        Marca::create(["id" => 6, "nome" => "Samsung"]);
        Marca::create(["id" => 7, "nome" => "Xiaomi"]);
    }
}
