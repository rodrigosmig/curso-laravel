<?php

use App\Desenvolvedor;
use App\Projeto;

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

Route::get('/desenvolvedorprojetos', function () {
    $desenvolvedores = Desenvolvedor::with('projetos')->get();

    foreach ($desenvolvedores as $d) {
        echo "<p>Nome do Desenvolvedor: " . $d->nome . "</p>";
        echo "<p>Cargo do Desenvolvedor: " . $d->cargo . "</p>";

        echo "Projetos: <br>";
        echo "<ul>";
        foreach ($d->projetos as $p) {
            echo "<li>";
            echo "Nome: " . $p->nome . " | ";
            echo "Horas: " . $p->estimativa_horas . " | ";
            echo "Horas Semanais: " . $p->pivot->horas_semanais;
            echo "</li>";
        }
        echo "</ul>";
        echo '<hr>';
    }

    //return $desenvolvedores->toJson();
});

Route::get('/projetodesenvolvedores', function () {
    $projetos = Projeto::with('desenvolvedores')->get();

    foreach ($projetos as $p) {
        echo "<p>Nome do Projeto: " . $p->nome . "</p>";
        echo "<p>Estimativa: " . $p->estimativa_horas . "</p>";

        echo "Desenvolvedores: <br>";
        echo "<ul>";
        foreach ($p->desenvolvedores as $d) {
            echo "<li>";
            echo "Nome: " . $d->nome . " | ";
            echo "Cargo: " . $d->cargo . " | ";
            echo "Horas Semanais: " . $d->pivot->horas_semanais;
            echo "</li>";
        }
        echo "</ul>";
        echo '<hr>';
    }

    //return $desenvolvedores->toJson();
});

Route::get('/alocar', function () {
    $proj = Projeto::find(4);

    $proj->desenvolvedores()->attach([
        2 => ['horas_semanais' => 20],
        3 => ['horas_semanais' => 19],
    ]);
});

Route::get('/desalocar', function () {
    $proj = Projeto::find(4);

    $proj->desenvolvedores()->detach([3]);
});

