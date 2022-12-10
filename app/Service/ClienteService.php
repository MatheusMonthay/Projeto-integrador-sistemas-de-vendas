<?php

namespace App\Service;


use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Support\Facades\Log;


class ClienteService {
    public function salvarUsuario(Usuario $user, Endereco $endereco){
        try{
            $dbUsuario =Usuario::where("login", $user->login)->first();
            if($dbUsuario){
                return ['status'=> 'err','message'=>'CPF já cadastrado'];
            }
            $user->save();
            $endereco->usuario_id = $user->id;
            $endereco->save();
            return ['status'=> 'ok','message'=>'Usuario cadastrado com sucesso'];
        }
        catch(\Exception $e){
            Log::error("ERRO", ['file'=> 'ClienteService.salvarUsuario', 'message'=> $e->getMessage()]);
            return ['status'=> 'err','message'=>'Não foi possivel cadastrar o usuario'];
        }
    }
}