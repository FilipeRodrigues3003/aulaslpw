<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $nome = $_POST['nome'];
    $result = ($n1+$n2+$n3)/3;
    echo "<pre>O aluno $nome possuí média: $result</pre>";
?>