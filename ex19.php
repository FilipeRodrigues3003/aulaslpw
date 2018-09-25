<?php
    
    $homem = 0;
    $mulher = 0;
    $i = 0;
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    
    while(isset($nome[$i])){
        if($sexo[$i]=="Masculino"){
            $homem++;
            echo "$nome[$i] é <b>homem</b> <br>";
        }
        else{
            $mulher++;
            echo "$nome[$i] é <b>mulher</b> <br>";
        }
        $i++;

    }

    echo "<br>Foram informados $homem pessoas do sexo masculino e $mulher pessoas do sexo feminino.";
    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>