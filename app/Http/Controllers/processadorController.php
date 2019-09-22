<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Processador;

class processadorController extends Controller
{
    public function listandoProcessador()
    {
        $processadores = Processador::orderBy('id', 'ASC')->paginate(5);

        return view('admin.processador')
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

        return redirect('/admin/processador/salvo');
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

        return redirect('/admin/processador/editado');
    }

    public function removendoProcessador($id)
    {
        $processador = Processador::find($id);

        $processador->delete();

        return redirect('/admin/processador/excluido');
    }
}
