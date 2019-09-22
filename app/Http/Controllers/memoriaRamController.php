<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemoriaRam;

class memoriaRamController extends Controller
{
    public function listandoMemoriaRam()
    {
        $memoriaRam = MemoriaRam::all();

        return view('listandoMemoriaRam')
            ->with('memoriaRam', $memoriaRam);
    }

    public function adicionandoMemoriaRam()
    {
        return view('adicionandoMemoriaRam');
    }

    public function salvandoMemoriaRam(Request $request)
    {
        $request->validate([
            "quantidade" => "required|max:50"
        ]);

        $memoriaRam = MemoriaRam::create([
            "quantidade" => $request->input('quantidade')
        ]);

        $memoriaRam->save();

        return redirect('/memoriaram');
    }
    public function alterandoMemoriaRam($id)
    {
        $memoriaRam = MemoriaRam::find($id);

        return view('adicionandoMemoriaRam')->with('memoriaRam', $memoriaRam);
    }

    public function modificandoMemoriaRam(Request $request, $id)
    {
        $memoriaRam = MemoriaRam::find($id);

        $request->validate([
            "quantidade" => "required|max:200"
        ]);

        $memoriaRam->quantidade = $request->input('quantidade');

        $memoriaRam->save();

        return redirect('/memoriaram');
    }

    public function removendoMemoriaRam($id)
    {
        $memoriaRam = MemoriaRam::find($id);

        $memoriaRam->delete();

        return redirect('/memoriaram');
    }
}
