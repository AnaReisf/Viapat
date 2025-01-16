<?php

    include "conexao.php";

    $codigo = $_REQUEST["cod"];
    $descricao = $_REQUEST["descricao"];
    $peso = $_REQUEST["peso"];
    $unidade = $_REQUEST["unidade"];
    $total = $_REQUEST["total"];


    
    $sql = "UPDATE produto SET descricao = :descricao, peso = :peso, unidade = :unidade, total = :total WHERE codigo = :codigo";

    $result = $conexao->prepare($sql);
    $result->bindValue(":codigo", $codigo);
    $result->bindValue(":descricao", $descricao);
    $result->bindValue(":peso", $peso);
    $result->bindValue(":unidade", $unidade);
    $result->bindValue(":total", $total);
    $result->execute();

    header("location: alterar.php?status=2");

?>