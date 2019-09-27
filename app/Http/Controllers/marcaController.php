<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class marcaController extends Controller
{
    public function listandoMarcas(Request $request, $salvo = false)
    {
        $marcas = Marca::orderBy('id', 'ASC')->paginate(5);
        return view('admin.marcas')
            ->with(['marcas' => $marcas]);
    }

    public function adicionandoMarca()
    {
        return view('adicionandoMarca');
    }

    public function salvandoMarca(Request $request)
    {
        $request->validate([
            "nome" => "required|max:50",
        ]);

        $marca = Marca::create([
            "nome" => $request->input('nome')
        ]);

        $marca->save();

        return redirect('/admin/marcas/salvo');
    }
    public function alterandoMarca($id)
    {
        $marca = Marca::find($id);

        return view('adicionandoMarca')->with('marca', $marca);
    }

    public function modificandoMarca(Request $request, $id)
    {
        $marca = Marca::find($id);

        $request->validate([
            "nome" => "required|max:200"
        ]);

        $marca->nome = $request->input('nome');

        $marca->save();

        return redirect('/admin/marcas/editado');
    }

    public function removendoMarca($id)
    {
        $marca = Marca::find($id);

        $marca->delete();

        return redirect('/admin/marcas/excluido');
    }
}
