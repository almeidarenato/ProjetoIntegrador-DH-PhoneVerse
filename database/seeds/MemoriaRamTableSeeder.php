<?php

use Illuminate\Database\Seeder;
use App\MemoriaRam;

class MemoriaRamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemoriaRam::create(["id" => 1, "quantidade" => 1]);
        MemoriaRam::create(["id" => 2, "quantidade" => "1.5"]);
        MemoriaRam::create(["id" => 3, "quantidade" => 12]);
        MemoriaRam::create(["id" => 4, "quantidade" => 2]);
        MemoriaRam::create(["id" => 5, "quantidade" => 3]);
        MemoriaRam::create(["id" => 6, "quantidade" => 4]);
        MemoriaRam::create(["id" => 7, "quantidade" => 6]);
        MemoriaRam::create(["id" => 8, "quantidade" => 8]);
    }
}
