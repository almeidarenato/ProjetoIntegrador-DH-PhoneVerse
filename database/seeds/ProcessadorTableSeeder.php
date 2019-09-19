<?php

use Illuminate\Database\Seeder;
use App\Processador;

class ProcessadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Processador::create(["id" => 1, "modelo" => "A10 Fusion", "marca" => "Apple"]);
        Processador::create(["id" => 2, "modelo" => "A11 Bionic", "marca" => "Apple"]);
        Processador::create(["id" => 3, "modelo" => "A8", "marca" => "Apple"]);
        Processador::create(["id" => 4, "modelo" => "A9", "marca" => "Apple"]);
        Processador::create(["id" => 5, "modelo" => "Cortex-A53", "marca" => "Mediatek"]);
        Processador::create(["id" => 6, "modelo" => "MT6735", "marca" => "Mediatek"]);
        Processador::create(["id" => 7, "modelo" => "MT6762", "marca" => "Mediatek"]);
        Processador::create(["id" => 8, "modelo" => "Snapdragon 425", "marca" => "Qualcomm"]);
        Processador::create(["id" => 9, "modelo" => "Snapdragon 636", "marca" => "Qualcomm"]);
        Processador::create(["id" => 10, "modelo" => "Snapdragon 425", "marca" => "Qualcomm"]);
        Processador::create(["id" => 11, "modelo" => "Snapdragon 636", "marca" => "Qualcomm"]);
        Processador::create(["id" => 12, "modelo" => "Snapdragon 801", "marca" => "Qualcomm"]);
        Processador::create(["id" => 13, "modelo" => "Snapdragon 835", "marca" => "Qualcomm"]);
        Processador::create(["id" => 14, "modelo" => "Snapdragon 845", "marca" => "Qualcomm"]);
        Processador::create(["id" => 15, "modelo" => "Snapdragon 660", "marca" => "Qualcomm"]);
        Processador::create(["id" => 16, "modelo" => "Snapdragon 626", "marca" => "Qualcomm"]);
        Processador::create(["id" => 17, "modelo" => "Snapdragon 630", "marca" => "Qualcomm"]);
        Processador::create(["id" => 18, "modelo" => "Snapdragon 665", "marca" => "Qualcomm"]);
        Processador::create(["id" => 19, "modelo" => "Snapdragon 675", "marca" => "Qualcomm"]);
        Processador::create(["id" => 20, "modelo" => "Snapdragon 821", "marca" => "Qualcomm"]);
        Processador::create(["id" => 21, "modelo" => "Snapdragon 855 plus", "marca" => "Qualcomm"]);
        Processador::create(["id" => 22, "modelo" => "Snapdragon 855", "marca" => "Qualcomm"]);
        Processador::create(["id" => 23, "modelo" => "Snapdragon 625", "marca" => "Qualcomm"]);
        Processador::create(["id" => 24, "modelo" => "Exynons 7", "marca" => "Samsung"]);
        Processador::create(["id" => 25, "modelo" => "Exynos 9", "marca" => "Samsung"]);
    }
}
