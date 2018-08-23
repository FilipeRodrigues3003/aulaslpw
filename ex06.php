<?php
    $n1 = $_POST['a'];
    $n2 = $_POST['b'];
    $aux = $n1;
    $n1 = $n2;
    $n2 = $aux;
    echo "<pre>A = $n1 <br/>B = $n2</pre>";
?>