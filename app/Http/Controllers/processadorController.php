<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Processador;

class processadorController extends Controller
{
    public function listandoProcessadores()
    {
        $processadores = Processador::all();

        return view('listandoProcessadores')
            ->with('processadores', $processadores);
    }

    public function adicionandoProcessador()
    {
        return view('adicionandoProcessador');
    }

    public function salvandoProcessador(Request $request)
    {
        $request->validate([
            "marca" => "required|max:50",
            "modelo" => "required|max:200"
        ]);

        $processador = Processador::create([
            "marca" => $request->input('marca'),
            "modelo" => $request->input('modelo')
        ]);

        $processador->save();

        return redirect('/Processadores');
    }
    public function alterandoProcessador($id)
    {
        $processador = Processador::find($id);

        return view('adicionandoProcessador')->with('processador', $processador);
    }

    public function modeificandoProcessador(Request $request, $id)
    {
        $processador = Processador::find($id);

        $request->validate([
            "marca" => "required|max:50",
            "modelo" => "required|max:200"
        ]);

        $processador->marca = $request->input('marca');
        $processador->modelo = $request->input('modelo');

        $processador->save();

        return redirect('/processadores');
    }

    public function removendoProcessador($id)
    {
        $processador = Processador::find($id);

        $processador->delete();

        return redirect('/processadores');
    }
}
