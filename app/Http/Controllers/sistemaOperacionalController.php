<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SistemaOperacional;

class sistemaOperacionalController extends Controller
{
    public function listandoSistemasOperacionais(){
        $sistemasOperacionais = SistemaOperacional::all();

        return view('listandoSistemasOperacionais')
            ->with('sistemasOperacionais', $sistemasOperacionais);
    }

    public function adicionandoSistemaOperacional(){
        return view('adicionandoSistemaOperacional');
    }

    public function salvandoSistemaOperacional(Request $request){
        $request->validate([
            "marca" => "required|max:50",
            "versao" => "required|max:50"
        ]);

        $sistemaOperacional = SistemaOperacional::create([
            "marca" => $request->input('marca'),
            "versao" => $request->input('versao')
        ]);

        $sistemaOperacional->save();

        return redirect('/sistemaOperacional');
    }
    public function alterandoSistemaOperacional($id){
        $sistemaOperacional = SistemaOperacional::find($id);

        return view('adicionandoSistemaOperacional')->with('sistemaOperacional', $sistemaOperacional);
    }

    public function modificandoSistemaOperacional(Request $request, $id){
        $sistemaOperacional = SistemaOperacional::find($id);

        $request->validate([
            "marca" => "required|max:50",
            "versao" => "required|max:200"
        ]);

        $sistemaOperacional->marca = $request->input('marca');

        $sistemaOperacional->versao = $request->input('versao');

        $sistemaOperacional->save();

        return redirect('/sistemaOperacional');
    }

    public function removendoSistemaOperacional($id){
        $sistemaOperacional = SistemaOperacional::find($id);

        $sistemaOperacional->delete();

        return redirect('/sistemaOperacional');
    }
}
