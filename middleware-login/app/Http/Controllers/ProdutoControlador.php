<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{

    public function __construct() {
        $this->middleware(\App\Http\Middleware\ProdutoAdmin::class);
    }

    private $produtos = ["Televisão 40'", "Notebook Acer", "Impressora HP", "HD Externo"];

    public function index() {
        echo "<h3>Produtos<h3>";
        echo "<ol>";
        foreach ($this->produtos as $value) {
            echo "<li>" . $value . "</li>";
        }
        echo "</ol>";
    }
}
