<?php
    $n1 = $_POST["n1"];

    echo "O número informado ".(($n1>100 and $n1<200)?"$n1 está entre 100 e 200":"$n1 não está entre 100 e 200");

    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>