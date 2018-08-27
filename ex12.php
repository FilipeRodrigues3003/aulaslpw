<?php
    $n1 = $_POST["n1"];
    
    $result = $n1 + ($n1*45/100);
    $result += ($result*28/100);
    echo "O consumidor irá pagar R$ $result no carro";
    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>