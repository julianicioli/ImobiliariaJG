<?php

require_once '../imobiliariaJG/app/models/Cidade.php';

try{
    $cidade = new Cidade("São Paulo", "sp");
    $cidade->setId(1);

    echo "<h2>Dados da Cidade</h2>";
    echo "ID: " . $cidade->getId() . "<br>";
    echo "Nome: " . $cidade->getNome() . "<br>";
    echo "Estado: " . $cidade->getEstado() . "<br>";
}
catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>