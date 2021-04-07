<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\SiteContato::factory()->count(100)->create(); 
        //factory(App\Models\SiteContato::class, 100)->create();
        //factory(SiteContato::class,100)->create();
        /*
        $contato = new SiteContato();
        $contato->nome ='Jacó';
        $contato->telefone='(77) 991818660';
        $contato->email='jacofernandes@gmail.com';
        $contato->motivo_contato = 1;
        $contato->mensagem='Otimo trabalho';
        $contato->save();
        */
    }
}
