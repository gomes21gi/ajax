<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];

$empregados = [];

$resposta =
    [
        "nome" => $nome,
        "idade" => $idade,
        "sexo" => $sexo,
    ];

array_push($empregados, $resposta);

$json_texto = json_encode(["empregados" => $empregados]);
echo($json_texto);