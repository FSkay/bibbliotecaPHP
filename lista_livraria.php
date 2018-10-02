<?php

$_Livros = [
    ['nome' => 'Padrões de Projeto', 'ano' => 2011],
    ['nome' => 'Padrões de Projeto', 'ano' => 2014],
    ['nome' => 'Padrões de Projeto', 'ano' => 2013],
];
header('Content-Type: application/json; charset=utf-8');

echo json_encode($_Livros);
