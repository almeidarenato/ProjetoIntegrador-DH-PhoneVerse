<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Questionario;
use App\User;

class QuestionarioController extends Controller
{
    public function capturar(Request $request)
    {
        //var_dump($request->input('dtNascimento'));
        $date =  $request->input('dtNascimento');
        //echo $date;
        //exit;
        //var_dump($date);
        // $date =  date('d/M/Y h:i:s', $date);
        //var_dump($date);
        //$motivo
        $naoquero = $request->input('naoQuero');
        if (isset($naoquero)) {
            $respostas = [
                'nome' => $request->input('nome'),
                'dtNascimento' => $date,
                'aparelho' => $request->input('aparelho'),
                'motivo' => $request->input('resp3'),
                'usoCelular' => $request->input('resp4')
            ];
            $user = User::create([
                'nome' => $request->input('nome'),
                'email' => $request->input('email'),
                'senha' => $request->input('senha'),
                'dtNascimento' => $date,
                'aparelho' => $request->input('aparelho'),
                'motivo' => $request->input('resp3'),
                'usoCelular' => $request->input('resp4')
            ]);
        } else {
            $respostas = [
                'nome' => $request->input('nome'),
                'email' => $request->input('email'),
                'senha' => $request->input('senha'),
                'dtNascimento' => $request->input('dtNascimento'),
                'aparelho' => $request->input('aparelho'),
                'motivo' => $request->input('resp3'),
                'usoCelular' => $request->input('resp4')
            ];
            $user = User::create([
                'name' => $request->input('nome'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('senha')),
                'dtNascimento' => $date,
                'aparelho' => $request->input('aparelho'),
                'motivo' => $request->input('resp3'),
                'usoCelular' => $request->input('resp4')
            ]);
        }
        //echo $respostas['email'];
        //var_dump($respostas);
        $user->save();
        return view('respostas')->with('respostas', $respostas);
    }
}
