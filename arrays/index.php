<?php

/**
 * Tendo os arrays ['ES', 'MG', 'RJ', 'SP'] e ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'], 
 * percorra os vetores dados e crie um outro com a seguinte estrutura: 
 * ['ES'=>'Espírito Santo', 'MG'=>'Minas Gerais', 'RJ'=>'Rio de Janeiro', 'SP'=>'São Paulo']. 
 * Depois de criado terceiro vetor, leia-o e imprima em cada linha a chave de cada posição e seu 
 * respectivo valor separados por "-".
 */

include 'ArrayCidadeEstado.class.php';

$ArrayClass = new ArrayCidadeEstado();

$estados = ['ES', 'MG', 'RJ', 'SP'];
$cidades = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
$cidadeEstado = [];


$cidadeEstado = $ArrayClass->cidadeEstadoArray($cidades, $estados);
$keys = array_keys($cidadeEstado);


$ArrayClass->returnDataPrinted($keys, $cidadeEstado);
