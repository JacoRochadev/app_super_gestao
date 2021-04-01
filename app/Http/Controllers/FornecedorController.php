<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 1',
                'status' => 'S',
                'cnpj' => '000.000.00',
                'ddd' => '11',          //SP
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'fornecedor 2',
                'status' => 'N',
                'cnpj' => '011.000.00',
                'ddd' => '77',          //BA    
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'fornecedor 3',
                'status' => 'S',
                'cnpj' => '022.000.00',
                'ddd' => '71',          //SA
                'telefone' => '0000-0000'
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
