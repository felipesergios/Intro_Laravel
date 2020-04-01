<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos=[
           (object) ["nome"=>"Maria","tel"=>"12456789"],
           (object) ["nome"=>"Jose","tel"=>"432121"],
           (object) ["nome"=>"Gabriela","tel"=>"559874"]
        ];
        $contato = new Contato();
        $con=$contato->lista();
        dd($con->nome);
        return view('contato.index',compact('contatos'));
    }
    public function criar(Request $req){
        dd($req->all());
        return "Esse é o criar do contatoController";
    }
    public function editar(Request $req){
        dd($req['nome']);
        return "Esse é o editar do contatoController";
    }
}
