<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aparelho;
use App\Marca;
use App\MemoriaInterna;
use App\MemoriaRam;
use App\Processador;
use App\SistemaOperacional;
use App\SlotSim;

class aparelhoController extends Controller
{
    public function encontrandoAparelho($id)
    {
        $aparelho = Aparelho::find($id);

        return view('encontrandoAparelho')->with('aparelho', $aparelho);
    }
    
    public function listandoAparelhos()
    {

        $aparelhos = Aparelho::orderBy('id', 'ASC')->paginate(5);
        $marcas = Marca::orderBy('nome')->get();
        $sistemasoperacionais = SistemaOperacional::orderBy('nome')->orderBy('versao')->get();
        $processadores = Processador::orderBy('marca')->orderBy('modelo')->get();
        $memoriasinterna = MemoriaInterna::orderBy('quantidade')->get();
        $memoriasram = MemoriaRam::orderBy('quantidade')->get();
        $slotssim = SlotSim::orderBy('quantidade')->get();
        $data = ([
            'aparelhos' => $aparelhos, 'marcas' => $marcas,
            'sistemasoperacionais' => $sistemasoperacionais,
            'processadores' => $processadores,
            'memoriasinterna' => $memoriasinterna,
            'memoriasram' => $memoriasram,
            'slotssim' => $slotssim
        ]);
        return view('admin.aparelho')->with($data);
    }

    public function adicionandoAparelho()
    {
        return view('adicionandoAparelho');
    }

    public function salvandoAparelho(Request $request)
    {
        $request->validate([
            "modelo" => "required|max:50",
            'camerafrontal' => "required",
            'cameratraseira' => "required",
            'preco' => "required"
        ]);
        //* subindo imagem //
        $arquivo = $request->file('imagem');
        $nomePasta = 'uploads';
        $arquivo->storePublicly($nomePasta);
        $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
        $nomeArquivo = $arquivo->getClientOriginalName();
        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";
        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $aparelho = Aparelho::create([
            "modelo" => $request->input('modelo'),
            "imagem" => $caminhoRelativo,
            "id_marca" => $request->input('marca'),
            "id_sistemaoperacional" => $request->input('sistemaoperacional'),
            "id_processador" => $request->input('processador'),
            "id_memoriainterna" => $request->input('memoriainterna'),
            "id_memoriaram" => $request->input('memoriaram'),
            "id_slotsim" => $request->input('slotsim'),
            "camerafrontal" => $request->input('camerafrontal'),
            "cameratraseira" => $request->input('cameratraseira'),
            "preco" => $request->input('preco')
        ]);

        $aparelho->save();

        return redirect('/admin/aparelho/salvo');
    }
    public function modificandoAparelho(Request $request, $id)
    {
        $aparelho = Aparelho::find($id);
        $request->validate([
            "modelo" => "required|max:50",
            'camerafrontal' => "required",
            'cameratraseira' => "required",
            'preco' => "required"
        ]);
        //* subindo imagem //
        $arquivo = $request->file('imagem');
        $nomePasta = 'uploads';
        $arquivo->storePublicly($nomePasta);
        $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
        $nomeArquivo = $arquivo->getClientOriginalName();
        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";
        $arquivo->move($caminhoAbsoluto, $nomeArquivo);


        $aparelho->modelo = $request->input('modelo');
        $aparelho->imagem = $caminhoRelativo;
        $aparelho->id_marca = $request->input('marca');
        $aparelho->id_sistemaoperacional = $request->input('sistemaoperacional');
        $aparelho->id_processador = $request->input('processador');
        $aparelho->id_memoriainterna = $request->input('memoriainterna');
        $aparelho->id_memoriaram = $request->input('memoriaram');
        $aparelho->id_slotsim = $request->input('slotsim');
        $aparelho->camerafrontal = $request->input('camerafrontal');
        $aparelho->cameratraseira = $request->input('cameratraseira');
        $aparelho->preco = $request->input('preco');

        $aparelho->save();

        return redirect('/admin/aparelho/editado');
    }
    public function removendoAparelho($id)
    {
        $aparelho = Aparelho::find($id);

        $aparelho->delete();

        return redirect('/admin/aparelho/excluido');
    }
}
