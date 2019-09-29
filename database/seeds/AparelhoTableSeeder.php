<?php

use Illuminate\Database\Seeder;
use App\Aparelho;

class AparelhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aparelho::create(["id" => 1, "idmarca" => "Apple"]);
    }
}
