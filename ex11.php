<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $result = $n1 + ($n1*$n2/100);
    echo "O valor R$ $n1 com $n2 % de acrescimo resulta em R$ $result";
    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>