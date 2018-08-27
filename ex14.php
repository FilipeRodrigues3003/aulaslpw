<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    
    echo "O número informado ".(($n1>$n2)?" $n1 é maior que $n2":"$n2 é maior que $n1");

    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>