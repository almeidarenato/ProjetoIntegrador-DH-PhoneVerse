<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemoriaInterna;

class memoriaInternaController extends Controller
{
        public function listandoMemoriaInterna(){
            $memoriaInterna = MemoriaInterna::all();
    
            return view('listandoMemoriaInterna')->with('memoriaInterna', $memoriaInterna);
        }
    
        public function adicionandoMemoriaInterna(){
            return view('adicionandoMemoriaInterna');
        }
    
        public function salvandoMemoriaInterna(Request $request){
            $request->validate([
                "quantidade" => "required|max:50"
            ]);
    
            $memoriaInterna = MemoriaInterna::create([
                "quantidade" => $request->input('quantidade')
            ]);
    
            $memoriaInterna->save();
    
            return redirect('/memoriainterna');
        }

        public function alterandoMemoriaInterna($id){
            $memoriaInterna = MemoriaInterna::find($id);
    
            return view('adicionandoMemoriaInterna')->with('memoriaInterna', $memoriaInterna);
        }
    
        public function modificandoMemoriaInterna(Request $request, $id){
            $memoriaInterna = MemoriaInterna::find($id);
    
            $request->validate([
                "quantidade" => "required|max:200"
            ]);
    
            $memoriaInterna->quantidade = $request->input('quantidade');
    
            $memoriaInterna->save();
    
            return redirect('/memoriainterna');
        }
    
        public function removendoMemoriaInterna($id){
            $memoriaInterna = MemoriaInterna::find($id);
    
            $memoriaInterna->delete();
    
            return redirect('/memoriainterna');
        }
}
