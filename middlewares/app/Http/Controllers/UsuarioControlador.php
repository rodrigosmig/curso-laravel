<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsuarioControlador extends Controller
{
    public function __construct() {
        //$this->middleware('primeiro');
    }

    public function index() {
        Log::debug("UsuarioControlador@index");
        return '<h3>Lista de Usuários</h3>' . 
            "<ul>" .
            '<li>João</li>' .
            '<li>Maria</li>' .
            '<li>José</li>' .
            '<li>Marta</li>' .
            "</ul>";
    }
}
