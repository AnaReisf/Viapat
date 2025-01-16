

<?php

    include "conexao.php";

    $codigo = $_REQUEST["cod"];
    $sql = "delete from produto where codigo = :codigo";

    $result = $conexao->prepare($sql);
    $result->bindValue(":codigo", $codigo);
    $result->execute();

    header("location: excluir.php?status=1");

?>