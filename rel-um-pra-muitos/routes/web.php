<?php

use App\Produto;
use App\Categoria;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/categorias', function () {
    $cats = Categoria::all();
    foreach($cats as $c) {
        echo '<p>' . $c->id . " - " . $c->nome . '</p>';
    }
});

Route::get('/produtos', function () {
    $prods = Produto::all();
    echo "<table>";
    echo "<thead><tr><th>Nome</th><th>Estoque</th><th>Preço</th><th>Categoria</th></tr></thead>";
    echo "<tbody>";
    foreach($prods as $p) {
        echo '<tr>';
        echo '<td>' . $p->nome . '</td>';
        echo '<td>' . $p->estoque . '</td>';
        echo '<td>' . $p->preco . '</td>';
        echo '<td>' . $p->categoria['nome'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
});

Route::get('/categoriasprodutos', function () {
    $cats = Categoria::all();
    foreach($cats as $c) {
        echo '<p>' . $c->id . " - " . $c->nome . '</p>';
        $produtos = $c->produtos;

        echo "<ul>";
        foreach ($produtos as $p) {
            echo "<li>" . $p->nome . "</li>";
        }
        echo "</ul>";
    }
});

Route::get('/categoriasprodutos/json', function () {
    $cats = Categoria::with('produtos')->get();
    return $cats->toJson();
});

Route::get('/adicionarproduto', function () {
    $cat = Categoria::find(1);
    $prod = new Produto();
    $prod->nome = "Meu novo produto";
    $prod->estoque = 10;
    $prod->preco = 100;
    $prod->categoria()->associate($cat);
    $prod->save();

    return $prod->toJson();
});

Route::get('/removerprodutocategoria', function () {
    $p = Produto::find(10);

    $p->categoria()->dissociate();
    $p->save();
    return $p->toJson();
});

Route::get('/adicionarproduto/{id}', function ($id) {
    $cat = Categoria::with('produtos')->find($id);

    $prod = new Produto();
    $prod->nome = "Meu segundo produto";
    $prod->estoque = 2;
    $prod->preco = 234;

    $cat->produtos()->save($prod);

    return $cat->toJson();
});