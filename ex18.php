<?php
    function verifica($n1){
        return ($n1>=18)?"<span style='color:green;'>maior</span> de idade":"<span style='color:red;'>menor</span> de idade";
    }
    $quant = 0;
    $num = $_POST["num"];
    foreach($num as $value) {
        $result = verifica($value);
        echo "Pessoa com <b>$value</b> anos é <b>$result</b> <br>";
    }

    
    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>