<?php
    $n1 = $_POST['n1'];
    echo "<pre>Á vista: R$ $n1</pre><br/>";
    for($i = 2; $i<=5; $i=$i+1)
    {
        $result = $n1/$i;
        echo "<pre>$i Parcelas: R$ $result</pre><br/>";
    }
    
?>