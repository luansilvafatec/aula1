<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tela', function () {
    return view('minha-tela');
});

Route::get('/nome/{nome}', 
function (string $nome) {
    return 'Olá '.$nome;
});
Route::get('/nome/{nome}/{profissao}', 
function (string $nome, 
string $profissao) {
    return "Olá $nome, 
    você é o melhor $profissao do mundo!";
});