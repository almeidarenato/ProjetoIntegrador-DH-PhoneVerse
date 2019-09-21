<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aparelho;

class aparelhoController extends Controller{
    public function listandoAparelhos{
        $aparelhos = Aparelho::all();

        return view ('listandoaAparelhos') -> with ('aparelhos', $aparelhos);
    }

    public function adicionandoAparelho(){
        return view('adicionandoAparelho');
    }

    public function salvandoAparelho(Request $request){
        $request->validate([
            "titulo" => "required|max:50",
            "sinopse" => "required|max:200"
        ]);

        $aparelho = Aparelho::create([
            "titulo" => $request->input('titulo'),
            "sinopse" => $request->input('sinopse')
        ]);

        $aparelho->save();

        return redirect('/listandoAparelhos');
    }
}
