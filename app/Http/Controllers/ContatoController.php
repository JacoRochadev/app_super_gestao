<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        $motivo_contato = MotivoContato::all();


        /*1-forma
        $contato = new SiteContato;
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();
        */

        /*2-forma
        $contato = new SiteContato;
        $contato->fill($request->all());
        $contato->save();
        */

        //$contato = new SiteContato();
        //$contato->create($request->all());
        return view('site.contato', ['titulo'=>'Contato'], ['motivo_contato' => $motivo_contato]);
    }
    public function salvar(Request $request){
        $request->validate([
            'nome'=>'required|min:3|max:40',
            'telefone'=>'required',
            'email'=>'required',
            'motivo_contato'=>'required',
            'mensagem'=>'required|max:2000'
        ]);
        //SiteContato::create($request->all());
    }
}
