<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Questionario;
use App\User;

class QuestionarioController extends Controller
{

    public function cadastrar(Request $request)
    {
        //var_dump($request->input('dtNascimento'));

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
                'dtNascimento' => $request->input('dtNascimento'),
                'aparelho' => $request->input('aparelho'),
                'motivo' => $request->input('resp3'),
                'usoCelular' => $request->input('resp4')
            ];
            $user = User::create([
                'nome' => $request->input('nome'),
                'email' => $request->input('email'),
                'senha' => $request->input('senha'),
                'dtNascimento' => $request->input('dtNascimento'),
                'aparelho' => $request->input('aparelho'),
                'motivo' => $request->input('resp3'),
                'usoCelular' => $request->input('resp4')
            ]);
        } else {

            $request->validate([
                'email' => 'required|unique:users',
                'senha' => 'required',
                'dtNascimento' => 'required'
            ]);
            //$email = $request->input('email');
            // $verifica = User::whereEmail($email)->get();

            /* if (isset($verifica[0]->email)) {
                echo "seu e-mail já está cadastrado";
            } else {
                echo "oba seu email é novo";
                exit;
                */
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
            /*}*/
        }
        //echo $respostas['email'];
        //var_dump($respostas);
        $user->save();
        return view('respostas')->with('respostas', $respostas);
    }
}
