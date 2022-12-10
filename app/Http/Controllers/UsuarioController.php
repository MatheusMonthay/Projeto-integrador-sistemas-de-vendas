<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{   
    public function logar(Request $request){
        $data = [];

        if($request->isMethod("POST")){
            //Se entrar nesse if o usuario iniciou o login
            $login = $request->input("login");
            $senha = $request->input("senha");
            $credentials = ['login'=> $login, 'passaword' => $senha];
            if(Auth::attempt($credentials)){
                dd("logado");
            } else{
                dd("dados invalidos");

            }
        }

        return view("logar", $data);
    }
}
