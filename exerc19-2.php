<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista 1 - LPW - Questão 17</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script type="text/javascript">
        function duplicarCampos(){
            var clone = document.getElementById('origem').cloneNode(true);
            var destino = document.getElementById('destino');
            destino.appendChild (clone);
            var camposClonados = clone.getElementsByTagName('input');
            for(i=0; i<camposClonados.length;i++){
                camposClonados[i].value = '';
            }
        }
        function removerCampos(id){
            var node1 = document.getElementById('destino');
            node1.removeChild(node1.childNodes[0]);
        }
       
    </script>
    <?php
        $i = 0;
    ?>
</head>
<body>
    <form method="post" action="ex19.php">
        <div id="origem" align="center">
            <fieldset>
                Informe o nome: <input type="text" name="nome[]" required/><br>
                <fieldset><legend>Sexo</legend>
                    <?php
                        ++$i;
                        echo "<input type='radio'  name='sexo[$i]' id='masc[$i]' value='Masculino'/>
                        <label for='masc[$i]'>Masculino</label>
                        <input type='radio'  name='sexo[$i]' id='fem[$i]' value='Feminino'/>
                        <label for='fem[$i]'>Feminino</label>";
                    ?>
                </fieldset><br>
                
            </fieldset><br>
            <!--<img  src="../img/cross.gif" style="cursor: pointer;" onclick="removerCampos(this);">-->
        </div>
        <div id="destino">
        </div>
        <img  src="img/plus-flat.png" width="20px"  style="cursor: pointer;" onclick="duplicarCampos();">
        <input type="submit" value="Calcular">
    </form> 
</body>
</html>