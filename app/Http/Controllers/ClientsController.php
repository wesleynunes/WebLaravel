<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function cadastrar(){
        return view('clients.cadastrar', [
            'titulo'        => 'Clients',
            'nome'          => 'Wesley',
            'sobrenome'     => 'Nunes'
        ]);
    }

    public function editar(){

    }

    public function excluir(){

    }
}
