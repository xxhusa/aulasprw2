<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      <?php
      $numero1 = $_POST["numero1"];
       echo "numero recebido 1: "   . $numero1;
       
       $numero2 = $_POST["numero2"];
       echo " <br>numero recebido 2: "  . $numero2;
       
       $operacao = $_POST["operacao"];


    if  ($operacao == 1){
    function operacao($numero1 , $numero2){
        $resultado = "<br> O resultado da Soma é:" .$numero1 + $numero2;
        return $resultado;
    }
}
    else if  ($operacao == 2){
        function operacao($numero1 , $numero2){
        $resultado = "<br> O resultado da SUB é:" .$numero1 - $numero2;
        return $resultado;
        }
    }
    else if  ($operacao == 3){
        function operacao($numero1 , $numero2){
        $resultado = "<br> O resultado da DIV é:" .$numero1 / $numero2;
        return $resultado;
        }           
    }
    else if  ($operacao == 4){
        function operacao($numero1 , $numero2){
        $resultado = "<br> O resultado da MULT é:" .$numero1 * $numero2;
        return $resultado;
        }       

    }

        echo operacao($numero1 , $numero2); 
?><br>

     




</body>
</html>