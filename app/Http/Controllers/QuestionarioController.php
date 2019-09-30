<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Questionario;
use App\User;
use App\Aparelho;
use App\Mail\TestEmail;
use App\Mail\ContactEmail;
use Mail;

class QuestionarioController extends Controller
{

    public function cadastrar(Request $request)
    {
        //var_dump($request->input('dtNascimento'));

        $opcao = $request->input('opcaousuario');
        if ($opcao == 'esquerda') {

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
                $user->save();
            }

            // meu celular vive na tomada = > 3000
            // meu atual quebrou = < 1800
            // processador = alguns + memoria = 4
            // preco > 2000

            // jogar = proc + memoria
            // redes sociais = < proc basico < memoria = 3
            // trabalhar e video = bateria >= 4000
            // tirar foto = camera frontal > 30 camera traseira > 40



            return redirect('top3/aaa/' . $request->input('precoDe'));
        } else {
            // usuario escolheu o formulario da esquerda

            if ($request->has('naoQuero')) {

                // ele nao deseja salvar as informações

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
            } else {

                //ele deseja se cadastrar

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

                $user->save();
                //
            }
            return redirect('top3/precode/' . $request->input('precoDe') . '/precoate/' . $request->input('precoAte'));
        }


        //return view('respostas')->with('respostas', $respostas);
        // return redirect('top3/precode/' . $precode . '/precoate/' .$precoate);

    }


    public function teste()
    {
        $precode = 0;
        $precoate = 9000;
        return redirect('top3/precode/' . $precode . '/precoate/' . $precoate);
    }

    public function resultados($precode, $precoate)
    {
        // $aparelho = Aparelho::all()->whereBetween('preco', array($precode, $precoate))
        //    ->where('id', 6);
        //$aparelhoTop3 = '';
        $aparelhoTop3 = Aparelho::orderBy('id', 'ASC')->take(3)->get();
        $aparelhostop3ids = Aparelho::orderBy('id', 'ASC')->take(3)->select('id')->get()->toArray();
        $aparelhosVerMais = Aparelho::whereNotIn('id', $aparelhostop3ids)->take(9)->get();
        return view('top_page')->with(['aparelho' => $aparelhoTop3, 'aparelhosVerMais' => $aparelhosVerMais]);
    }


    public function enviaEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('emailinfo');

        $mensagem = $request->input('message');
        $subject = $request->input('subject');

        $data = [
            'name' => $name,
            'email' => $email,
            'text' => $mensagem,
            'subject' => $subject
        ];
        Mail::to('contato@phoneverse.tech')->send(new ContactEmail($data));

        return view('frontend.landing')->with(['email' => 'sucesso']);
    }
}
