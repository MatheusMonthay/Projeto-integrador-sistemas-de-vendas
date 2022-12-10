<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Service\ClienteService;


class ClienteController extends Controller
{
    public function cadastrar (Request $request){
        $data = [];

        return view("cadastrar", $data);
    }
    public function cadastrarCliente(Request $request){
        //pega todos os valores do formulario
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->login = $request->input("cpf", "");

        $senha =$request->input("passaword", "");
        $usuario->passaword = Hash::make($senha);

        $endereco= new Endereco($values);
        $endereco->logradouro = $request->input("endereco","");
        $clienteService = new ClienteService;
        $result = $clienteService->salvarUsuario($usuario, $endereco);
        
        $message = $result["message"];
        $status = $result["status"];

        $request->session()->flash($status, $message);

        return redirect()->route("cadastrar");
    }
}
