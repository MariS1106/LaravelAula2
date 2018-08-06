<?php

use Illuminate\Database\Seeder;
use App\mensagem;

class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mensagem::create([
        	'titulo' => 'Prova de Matemática',
        	'texto' => 'asdfsadfasdf',
        	'autor' => 'Mariane'
        ]);

        mensagem::create([
        	'titulo' => 'Prova de Matemática',
        	'texto' => 'asdfsasdasdfdfasdf',
        	'autor' => 'Mariane'
        ]);

        mensagem::create([
        	'titulo' => 'Prova de Matemática',
        	'texto' => 'asdfsadsfasdfsadfdfasdf',
        	'autor' => 'Mariane'
        ]);
    }
}
