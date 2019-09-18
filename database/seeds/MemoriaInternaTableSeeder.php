<?php

use Illuminate\Database\Seeder;
use App\MemoriaInterna;

class MemoriaInternaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemoriaInterna::create(["id" => 1, "quantidade" => 8.0]);
        MemoriaInterna::create(["id" => 2, "quantidade" => 16.0]);
        MemoriaInterna::create(["id" => 3, "quantidade" => 32.0]);
        MemoriaInterna::create(["id" => 4, "quantidade" => 64.0]);
        MemoriaInterna::create(["id" => 5, "quantidade" => 128.0]);
        MemoriaInterna::create(["id" => 6, "quantidade" => 512.0]);
    }
}
