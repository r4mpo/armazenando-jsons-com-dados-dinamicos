<?php

// localização e nome do arquivo que passaremos como json
$dataFile = getcwd() . '/base-de-dados/' . date('Y-m-d h-i-s') . '.json';

// dados passados via método post
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

// array com os dados passados
$data = [
    'nome'  => $nome,
    'senha' => $senha,
    'telefone'  => $telefone
];

// transformando array em json
$json = json_encode($data, JSON_PRETTY_PRINT);

// salvando o arquivo json
$download_json = fopen($dataFile, 'w');
fwrite($download_json, $json);
fclose($download_json);

// redirecionando
header('Location: index.html');

?>