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
        $regras =[
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];
        $feedback=[
            'required' => 'O campo :attribute precisa ser preenchido',
    
            'nome.min' => 'O campo nome tem que ter pelo menos 3 letras',
            'nome.max' => 'O campo nome tem que ter até 40 letras',
            'nome.unique' => 'Ocampo nome já tem um igual no banco',
    
            'email' => 'O email inserido não é válido',
    
            'mensagem' => 'O campo nome tem que ter até 2000 letras'
        ];
        $request->validate($regras, $feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
