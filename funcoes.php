<?php


// função sem parametro e sem retorno

//function mensagem(){
  //  echo "Boa noite! Não usar o celular.";
//}


//função com parametro e sem retorno

   // function mensagem($nome,$sobrenome){
     //   echo "Boa noite " .$nome. " " .$sobrenome. " ! Não usar celular:";
    //}


// função com parametro e com retorno    

//function mensagem($nome){

    //$msg =  "Boa noite " .$nome." ! Não usar celular:";
    //return $msg;

//}

//função com parametro e com retorno

function Boanoite(){
    mensagem();
    return  "Boa noite,";

}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //echo mensagem("André"); // mostrar mensagem com função sem parametro e sem retorno e função com parametro e sem retorno
    
    //$msgtemp=mensagem ("Rocha"); // mostrar mensagem criando variavel e com função com parametro e com retorno 
    //echo $msgtemp;

     
    echo mensagem(); 
     
    ?> TITIO
</body>
</html>