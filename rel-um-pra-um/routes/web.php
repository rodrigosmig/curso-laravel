<?php

use App\Cliente;
use App\Endereco;

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

Route::get('/clientes', function () {
    $clientes = Cliente::all();
    foreach ($clientes as $c) {
        echo "<p>ID: " . $c->id . "</p>";
        echo "<p>Nome: " . $c->nome . "</p>";
        echo "<p>Telefone: " . $c->telefone . "</p>";
        //$e = Endereco::where('cliente_id', $c->id)->first();
        echo "<p>Rua: " . $c->endereco->rua . "</p>";
        echo "<p>Numero: " . $c->endereco->numero . "</p>";
        echo "<p>Bairro: " . $c->endereco->bairro . "</p>";
        echo "<p>Cidade: " . $c->endereco->cidade . "</p>";
        echo "<p>UF: " . $c->endereco->uf . "</p>";
        echo "<p>CEP: " . $c->endereco->cep . "</p>";
        echo "<hr>";
    }
});

Route::get('/enderecos', function () {
    $enderecos = Endereco::all();
    foreach ($enderecos as $e) {
        echo "<p>ID Cliente: " . $e->cliente->cliente_id . "</p>";
        echo "<p>Nome: " . $e->cliente->nome . "</p>";
        echo "<p>Telefone: " . $e->cliente->telefone . "</p>";
        echo "<p>Rua: " . $e->rua . "</p>";
        echo "<p>Numero: " . $e->numero . "</p>";
        echo "<p>Bairro: " . $e->bairro . "</p>";
        echo "<p>Cidade: " . $e->cidade . "</p>";
        echo "<p>UF: " . $e->uf . "</p>";
        echo "<p>CEP: " . $e->cep . "</p>";
        
        echo "<hr>";
    }
});

Route::get('/inserir', function() {
    $c = new Cliente();
    $c->nome = "José Almeida";
    $c->telefone = "11 65880-7955";
    $c->save();

    $e = new Endereco();
    $e->rua = "Av. do Estado";
    $e->numero = 400;
    $e->bairro = "Centro";
    $e->cidade = "Guarulhos";
    $e->uf = "SP";
    $e->cep = "12365-154";

    $c->endereco()->save($e);

    $c = new Cliente();
    $c->nome = "Marcos Silva";
    $c->telefone = "11 55443-2345";
    $c->save();

    $e = new Endereco();
    $e->rua = "Av. Paraguai";
    $e->numero = 500;
    $e->bairro = "Tambiá";
    $e->cidade = "João Pessoa";
    $e->uf = "PB";
    $e->cep = "23456-112";

    $c->endereco()->save($e);
});

Route::get('/clientes/json', function() {
    //$clientes = Cliente::all();
    $clientes = Cliente::with(['endereco'])->get();
    return $clientes->toJson();
});

Route::get('/enderecos/json', function() {
    //$endereco = Endereco::all();
    $endereco = Endereco::with(['cliente'])->get();
    return $endereco->toJson();
});