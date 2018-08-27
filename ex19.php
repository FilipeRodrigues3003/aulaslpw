<?php
    
    $homem = 0;
    $mulher = 0;
    $i = 0;
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    print_r($sexo);
    while(isset($nome[$i])){
        if($sexo[$i]=="Masculino"){
            $homem++;
            echo "$nome[$i] é homem <br>";
        }
        else{
            $mulher++;
            echo "$nome[$i] é mulher <br>";
        }
        $i++;

    }

    echo "Foram informados $homem pessoas do sexo masculino e $mulher pessoas do sexo feminino";
    echo "<br><a href='javascript:history.go(-1)'>Voltar</a>";
?>