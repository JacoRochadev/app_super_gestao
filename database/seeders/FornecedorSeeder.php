<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instancia o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome ='Fornecedor 100';
        $fornecedor->site='fornecedor100.com.br';
        $fornecedor->uf='BA';
        $fornecedor->email='fornecedor100@gmail.com';
        $fornecedor->save();

        //o metodo create(atencao para o atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site'=>'fornecedor200.com.br',
            'uf' => 'SP',
            'email' => 'fornecedor200@gmail.com'
        ]);

        //insert
        \DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site'=>'fornecedor300.com.br',
            'uf' => 'MG',
            'email' => 'fornecedor300@gmail.com'
        ]);
    }
}
