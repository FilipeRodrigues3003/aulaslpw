<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $result = $n2+(15*$n3/100);
    echo "<pre>O funcionário $n1, receberá R$ $result.</pre>";
?>