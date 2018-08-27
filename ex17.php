<?php
    function verifica($n1,$menor,$maior): int{
        return ($n1<=$maior and $n1>=$menor)?1:0;
    }
    $quant = 0;
    $num = $_POST["num"];
    foreach($num as $value) {

        $quant += verifica($value,10,150);
    }

    echo "Foram inseridos $quant númer".(($quant==1)?"o":"os")." entre 10 e 150";
    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>