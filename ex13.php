<?php
    $n1 = $_POST["n1"];
    
    echo "O número informado ".(($n1>10)?"é maior que 10":"não é maior que 10");

    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>