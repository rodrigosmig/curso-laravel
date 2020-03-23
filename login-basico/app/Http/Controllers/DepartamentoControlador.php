<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        echo "<h4>Lista de Departamentos</h4>" ;
        echo "<ul>";
        echo "<li>Alimentos</li>";
        echo "<li>Movéis</li>";
        echo "<li>Eletrônicos</li>";
        echo "<li>Roupas</li>";
        echo "</ul>";
        echo "<hr>";

        if(Auth::check()) {
            $user = Auth::user();
            echo "<h4>Você está logado!</h4>";
            echo "<p>" . $user->name . "</p>";
            echo "<p>" . $user->email . "</p>";
            echo "<p>" . $user->id . "</p>";
        }
        else {
            echo "<h4>Você não está logado</h4>";
        }
    }
}
