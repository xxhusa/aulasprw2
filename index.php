<?php

$nome = "Tio patinhas";
$idade = 10;
$idades = "20";
echo "Boa noite, " . $nome;
echo "<br> idade:" .$idade;
echo "<br> idade:" . $idades;
$lista["nome"] = "tio patinhas";
$lista["email"] = "tio@gmail.com";
$lista[4] = 3;
$lista[] = 4;
$alunos["2B"][] = "Adailton";
$alunos["2B"][] = "alex";
unset($alunos["2B"][1]);

echo "<br>Aluno:". $alunos["2B"][0];    


echo "<pre>";
var_dump ($alunos);

if($idade > 18) {
echo "<br>você é maior";
} else {
    echo "<br>você é viadinho";
}

$idade = 18;
do {
    echo " ,voce nao tem idade para dirigir<br> ";
    echo " idade atual: " .$idade;
    $idade = $idade +1;
}while ($idade<18);

for($i = 0; $i <10; $i++){
    echo"<br> valor de i: " .$i;
}

$idade = 19;

switch($idade) {
    case '16':
        echo "<br>voce ainda é bobinho";
        break;
    case '17':
        echo "<br>voce é bobo";
        break;
    case '18':
        echo "<br>voce é bobao";
        break;
    default:
    echo "<br>voce não tem idade ainda";
    break;        

}