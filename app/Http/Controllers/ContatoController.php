<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contatoGet(){
        return view('site.contato', ['titulo' => 'Super gestão - contato']);
    }
    public function contatoPost(Request $request){
        $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->email = $request->input('email');
        // $contato->mensagem = $request->input('mensagem');
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        
        // $contato ->create($request->all());
        // $contato->save();
        return view('site.contato', ['titulo' => 'Super gestão - contato']);
    }
}
