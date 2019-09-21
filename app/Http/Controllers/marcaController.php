<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class marcaController extends Controller
{
    public function listandoMarcas(){
        $marcas = Marca::all();

        return view('listandoMarcas')
            ->with('marcas', $marcas);
    }

    public function adicionandoMarca(){
        return view('adicionandoMarca');
    }

    public function salvandoMarca(Request $request){
        $request->validate([
            "nome" => "required|max:50",
        ]);

        $marca = Marca::create([
            "nome" => $request->input('nome')
        ]);

        $marca->save();

        return redirect('/marcas');
    }
    public function alterandoMarca($id){
        $marcas = Marca::find($id);

        return view('adicionandoMarca')->with('marca', $marca);
    }

    public function modificandoMarca(Request $request, $id){
        $marca = Marca::find($id);

        $request->validate([
            "nome" => "required|max:200"
        ]);

        $marca->nome = $request->input('nome');

        $marca->save();

        return redirect('/marcas');
    }

    public function removendoMarca($id){
        $marca = Marca::find($id);

        $marca->delete();

        return redirect('/marcas');
    }
   
}
