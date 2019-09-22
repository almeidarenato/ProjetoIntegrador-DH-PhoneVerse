<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SistemaOperacional;

class sistemaOperacionalController extends Controller
{
    public function listandoSistemasOperacionais()
    {
        $sistemasOperacionais = SistemaOperacional::orderBy('id', 'ASC')->paginate(5);

        return view('admin.sistemaoperacional')
            ->with('sistemasOperacionais', $sistemasOperacionais);
    }

    public function adicionandoSistemaOperacional()
    {
        return view('adicionandoSistemaOperacional');
    }

    public function salvandoSistemaOperacional(Request $request)
    {
        $request->validate([
            "nome" => "required|max:50",
            "versao" => "required|max:50"
        ]);

        $sistemaOperacional = SistemaOperacional::create([
            "nome" => $request->input('nome'),
            "versao" => $request->input('versao')
        ]);

        $sistemaOperacional->save();

        return redirect('/admin/sisop/salvo');
    }
    public function alterandoSistemaOperacional($id)
    {
        $sistemaOperacional = SistemaOperacional::find($id);

        return view('adicionandoSistemaOperacional')->with('sistemaOperacional', $sistemaOperacional);
    }

    public function modificandoSistemaOperacional(Request $request, $id)
    {
        $sistemaOperacional = SistemaOperacional::find($id);

        $request->validate([
            "nome" => "required|max:50",
            "versao" => "required|max:200"
        ]);

        $sistemaOperacional->nome = $request->input('nome');

        $sistemaOperacional->versao = $request->input('versao');

        $sistemaOperacional->save();

        return redirect('/admin/sisop/editado');
    }

    public function removendoSistemaOperacional($id)
    {
        $sistemaOperacional = SistemaOperacional::find($id);

        $sistemaOperacional->delete();

        return redirect('/admin/sisop/excluido');
    }
}
