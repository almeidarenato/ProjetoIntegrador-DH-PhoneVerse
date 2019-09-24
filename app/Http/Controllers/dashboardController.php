<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Aparelho;
use App\MemoriaInterna;
use App\MemoriaRam;
use App\SistemaOperacional;
use App\Marca;
use App\SlotSim;
use App\Processador;

class dashboardController extends Controller
{
    public function contaEntidades()
    {
        $usuarios = User::count();
        $aparelhos = Aparelho::count();
        $marcas = Marca::count();
        $processadores = Processador::count();
        $memoriaInterna = MemoriaInterna::count();
        $memoriaRam = MemoriaRam::count();
        $sistemaoperacional = SistemaOperacional::count();
        $slotSim = SlotSim::count();

        $slotsim = SlotSim::count();

        $data = ([
            'usuarios' => $usuarios, 'aparelhos' => $aparelhos,
            'marcas' => $marcas, 'processadores' => $processadores, 'memoriaInterna' => $memoriaInterna,
            'memoriaRam' => $memoriaRam, 'sistemaoperacional' => $sistemaoperacional,
            'slotSim' => $slotSim
        ]);
        return view('admin.dashboard')->with($data);
    }
}
