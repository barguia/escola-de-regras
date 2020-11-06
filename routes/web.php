<?php

use Illuminate\Support\Facades\Route;
use App\Models\EscolaDeRegra\CtrlRegra;
use App\Models\EscolaDeRegra\CtrlGrupo;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    $grupo = new CtrlGrupo('Um grupo');
    $regra1 = new CtrlRegra("Teste primeira Regra");
    $regra2 = new CtrlRegra("Teste segunda Regra");
    $regra3 = new CtrlRegra("Teste terceira Regra");
    $grupo->addRegra($regra1);
    $grupo->addRegra($regra2);
    $grupo->addRegra($regra3);
    foreach($grupo->getRegras() as $r) {
        echo $r->getTitulo().'<br>';
    }
    return ;
});
