<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
            ['nome' => 'Camiseta Polo', 'preco' => 100, 'estoque' => 4, 'categoria_id' => 1]
        );
        DB::table('produtos')->insert(
            ['nome' => 'Calça Jeans', 'preco' => 120, 'estoque' => 1, 'categoria_id' => 1]
        );
        DB::table('produtos')->insert(
            ['nome' => 'Camisa manga longa', 'preco' => 100, 'estoque' => 2, 'categoria_id' => 1]
        );
        DB::table('produtos')->insert(
            ['nome' => 'Jogos', 'preco' => 38, 'estoque' => 4, 'categoria_id' => 2]
        );
        DB::table('produtos')->insert(
            ['nome' => 'Impressora', 'preco' => 250, 'estoque' => 5, 'categoria_id' => 6]
        );
        DB::table('produtos')->insert(
            ['nome' => 'Mouse', 'preco' => 54, 'estoque' => 6, 'categoria_id' => 6]
        );
        DB::table('produtos')->insert(
            ['nome' => 'Boticário', 'preco' => 62, 'estoque' => 7, 'categoria_id' => 3]
        );
        DB::table('produtos')->insert(
            ['nome' => 'Cama', 'preco' => 800, 'estoque' => 8, 'categoria_id' => 4]
        );
        DB::table('produtos')->insert(
            ['nome' => 'Guarda-Roupa', 'preco' => 550, 'estoque' => 8, 'categoria_id' => 4]
        );
    }
}
