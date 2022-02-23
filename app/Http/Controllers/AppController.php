<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller{

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
