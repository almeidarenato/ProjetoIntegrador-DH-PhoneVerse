<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionario;

class QuestionarioController extends Controller
{
    public function capturar(Request $request)
    {
        $respostas = [
            'email' => $request->input('email')
        ];
        //echo $respostas['email'];
        //var_dump($respostas);
        return view('respostas')->with('respostas', $respostas);
    }
}
