<?php

use Illuminate\Database\Seeder;
use App\SistemaOperacional;

class SistemaOperacionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SistemaOperacional::create(["id" => 1, "nome" => "Android", "versao" => 4]);
        SistemaOperacional::create(["id" => 2, "nome" => "Android", "versao" => 6]);
        SistemaOperacional::create(["id" => 3, "nome" => "Android", "versao" => 7]);
        SistemaOperacional::create(["id" => 4, "nome" => "Android", "versao" => 7]);
        SistemaOperacional::create(["id" => 5, "nome" => "Android", "versao" => 8]);
        SistemaOperacional::create(["id" => 6, "nome" => "Android", "versao" => 8]);
        SistemaOperacional::create(["id" => 7, "nome" => "Android", "versao" => 9]);
        SistemaOperacional::create(["id" => 8, "nome" => "IOS", "versao" => 8]);
        SistemaOperacional::create(["id" => 9, "nome" => "IOS", "versao" => 9]);
        SistemaOperacional::create(["id" => 10, "nome" => "IOS", "versao" => 10]);
        SistemaOperacional::create(["id" => 11, "nome" => "IOS", "versao" => 11]);
        SistemaOperacional::create(["id" => 12, "nome" => "IOS", "versao" => 12]);
    }
}
