<?php

use Illuminate\Database\Seeder;
use App\SlotSim;

class SlotSimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SlotSim::create(["id" => 1, "quantidade" => "Single SIM"]);
        SlotSim::create(["id" => 2, "quantidade" => "Dual SIM"]);
    }
}
