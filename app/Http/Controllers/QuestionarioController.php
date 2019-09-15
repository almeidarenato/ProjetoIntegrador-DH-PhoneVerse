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
        $opcao = $request->input('opcaousuario');
        if ($opcao == 'esquerda') {

            //echo $date;
            //exit;
            //var_dump($date);
            // $date =  date('d/M/Y h:i:s', $date);
            //var_dump($date);
            //$motivo
            $naoquero = $request->input('naoQuero');
            if ($request->has('naoQuero')) {
                $respostas = [
                    'nome' => $request->input('nome'),
                    'dtNascimento' => $request->input('dtNascimento'),
                    'aparelho' => $request->input('aparelho'),
                    'motivo' => $request->input('resp3'),
                    'usoCelular' => $request->input('resp4')
                ];
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
                    'dtNascimento' => $request->input('dtNascimento'),
                    'aparelho' => $request->input('aparelho'),
                    'motivo' => $request->input('resp3'),
                    'usoCelular' => $request->input('resp4')
                ]);
            }
            //echo $respostas['email'];
            //var_dump($respostas);
        } else {
            if ($request->has('naoQuero')) {
                $respostas = [
                    // Usuario
                    'name' => $request->input('nomeDireita'),
                    'email' => $request->input('emailDireita'),
                    'password' => Hash::make($request->input('senhaDireita')),
                    'dtNascimento' => $request->input('dtNascimentoDireita'),
                    //Opcao de Marcas
                    'marcaApple' => $request->has('marcaApple'),
                    'marcaMotorola' => $request->has('marcaMotorola'),
                    'marcaSamsung' => $request->has('marcaSamsung'),
                    'marcaXiaomi' => $request->has('marcaXiaomi'),
                    'marcaLG' => $request->has('marcaLG'),
                    'marcaAsus' => $request->has('marcaAsus'),
                    //Opcao de Versao
                    'versaoIos12' => $request->has('marcaAsus'),
                    'versaoAndroid7' => $request->has('versaoAndroid7'),
                    'versaoAndroid8' => $request->has('versaoAndroid8'),
                    'versaoAndroid9' => $request->has('versaoAndroid9'),
                    'versaoAndroid10' => $request->has('versaoAndroid10'),
                    //Opcao de Processador
                    'procApple' => $request->has('procApple'),
                    'procKirin' => $request->has('procKirin'),
                    'procSnapdragon' => $request->has('procSnapdragon'),
                    'procMediaTek' => $request->has('procMediaTek'),
                    'procExynos' => $request->has('procExynos'),
                    // Caracteristicas do Celular
                    'tamanhoTelaDe' => $request->input('tamanhoTelaDe'),
                    'tamanhoTelaAte' => $request->input('tamanhoTelaAte'),
                    'bateriaDe' => $request->input('bateriaDe'),
                    'bateriaAte' => $request->input('bateriaAte'),
                    'cameraDe' => $request->input('cameraDe'),
                    'cameraAte' => $request->input('cameraAte'),
                    'precoDe' => $request->input('precoDe'),
                    'precoAte' => $request->input('precoAte'),
                    'memoriaInterna' => $request->input('memoriaInterna'),
                    'memoriaRam' => $request->input('memoriaRam')

                ];

                //return view('respostas')->with('respostas',$respostas);
            } else {
                $respostas = [
                    // Usuario
                    'name' => $request->input('nomeDireita'),
                    'email' => $request->input('emailDireita'),
                    'password' => Hash::make($request->input('senhaDireita')),
                    'dtNascimento' => $request->input('dtNascimentoDireita'),
                    //Opcao de Marcas
                    'marcaApple' => $request->has('marcaApple'),
                    'marcaMotorola' => $request->has('marcaMotorola'),
                    'marcaSamsung' => $request->has('marcaSamsung'),
                    'marcaXiaomi' => $request->has('marcaXiaomi'),
                    'marcaLG' => $request->has('marcaAsus'),
                    //Opcao de Versao
                    'versaoIos12' => $request->has('versaoIos12'),
                    'versaoAndroid7' => $request->has('versaoAndroid7'),
                    'versaoAndroid8' => $request->has('versaoAndroid8'),
                    'versaoAndroid9' => $request->has('versaoAndroid9'),
                    'versaoAndroid10' => $request->has('versaoAndroid10'),
                    //Opcao de Processador
                    'procApple' => $request->has('procApple'),
                    'procKirin' => $request->has('procKirin'),
                    'procSnapdragon' => $request->has('procSnapdragon'),
                    'procMediaTek' => $request->has('procMediaTek'),
                    'procExynos' => $request->has('procExynos'),
                    // Caracteristicas do Celular
                    'tamanhoTelaDe' => $request->input('tamanhoTelaDe'),
                    'tamanhoTelaAte' => $request->input('tamanhoTelaAte'),
                    'bateriaDe' => $request->input('bateriaDe'),
                    'bateriaAte' => $request->input('bateriaAte'),
                    'cameraDe' => $request->input('cameraDe'),
                    'cameraAte' => $request->input('cameraAte'),
                    'precoDe' => $request->input('precoDe'),
                    'precoAte' => $request->input('precoAte'),
                    'memoriaInterna' => $request->input('memoriaInterna'),
                    'memoriaRam' => $request->input('memoriaRam')

                ];

                $user = User::create([
                    // Usuario
                    'name' => $request->input('nomeDireita'),
                    'email' => $request->input('emailDireita'),
                    'password' => Hash::make($request->input('senhaDireita')),
                    'dtNascimento' => $request->input('dtNascimentoDireita'),
                    //Opcao de Marcas
                    'marcaApple' => $request->has('marcaApple'),
                    'marcaMotorola' => $request->has('marcaMotorola'),
                    'marcaSamsung' => $request->has('marcaSamsung'),
                    'marcaXiaomi' => $request->has('marcaXiaomi'),
                    'marcaLG' => $request->has('marcaAsus'),
                    //Opcao de Versao
                    'versaoIos12' => $request->has('marcaAsus'),
                    'versaoAndroid7' => $request->has('versaoAndroid7'),
                    'versaoAndroid8' => $request->has('versaoAndroid8'),
                    'versaoAndroid9' => $request->has('versaoAndroid9'),
                    'versaoAndroid10' => $request->has('versaoAndroid10'),
                    //Opcao de Processador
                    'procApple' => $request->has('procApple'),
                    'procKirin' => $request->has('procKirin'),
                    'procSnapdragon' => $request->has('procSnapdragon'),
                    'procMediaTek' => $request->has('procMediaTek'),
                    'procExynos' => $request->has('procExynos'),
                    // Caracteristicas do Celular
                    'tamanhoTelaDe' => $request->input('tamanhoTelaDe'),
                    'tamanhoTelaAte' => $request->input('tamanhoTelaAte'),
                    'bateriaDe' => $request->input('bateriaDe'),
                    'bateriaAte' => $request->input('bateriaAte'),
                    'cameraDe' => $request->input('cameraDe'),
                    'cameraAte' => $request->input('cameraAte'),
                    'precoDe' => $request->input('precoDe'),
                    'precoAte' => $request->input('precoAte'),
                    'memoriaInterna' => $request->input('memoriaInterna'),
                    'memoriaRam' => $request->input('memoriaRam')
                ]);
            }
        }
        $user->save();
        return view('respostas')->with('respostas', $respostas);
    }
}
