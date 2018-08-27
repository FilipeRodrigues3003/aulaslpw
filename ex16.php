<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $media = ($n1+$n2+$n3)/3;

    $situacao = ($media>=7)?"<span style='color:green;'>aprovado</span>":(($media<=5)?"<span style='color:red;'>reprovado</span>":"<span style='color:orange;'>em recuperação</span>");
    
    echo "O aluno está <b>$situacao</b> na matéria ";

    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>