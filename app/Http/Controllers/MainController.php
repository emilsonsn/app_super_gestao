<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class MainController extends Controller{
    function main(){
       
        return view('site.principal', ['titulo' => 'Super gestão - principal']);
    }

    function sobreNos(){
        return view('site.sobre-nos', ['titulo' => 'Super gestão - sobre nós']);
    }

    function login(){
        return'login';
    }

    function clientes(){
        return'clientes';
    }

    function produtos(){
        return'produtos';
    }

    function fornecedores(){
        return'fornecedores';
    }
}
