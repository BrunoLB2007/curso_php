<?php
$nome = "Pedro";
$sobrenome = "Silveira";
echo "Olá ". $nome." ".$sobrenome."<br>";

echo strlen($nome); // serve para contar quantidade de caracteres// 

echo "<br>";

echo strlen($sobrenome);

echo "<br>";

echo strlen($nome ." ".$sobrenome); //conta todos os caracteres dentro dos parênteses e "", até os espaços //

echo "<br>";

echo strtoupper ($nome ." ".$sobrenome); //Tudo em maiúsculo//

echo "<br>";

echo strtolower ("TEXTO TUDO EM MUIUSCULO"); //tudo em minusculo//

echo "<br>";

echo strrev("anotaram a data da maratona"); //tudo ao contrário//

echo "<br>";

echo "<br>";

echo "tudo sobre a data atual <br>";

echo date ("d/m/Y");// dia mes e ano do pc, pode ser em qqr formato, se botar só o d ele diz só o dia//

echo "<br>";

echo date ("H:i:s");// esse é de hora// 

echo "<br>";

echo date ("d/m/Y H:i:s A");

echo "<br>";

echo date("w"); //0 domingo - 6 sábado//

echo "<br>";

// criar variável pra falar o dia da semana// 

echo "<br>";

echo "contador de dias da semana:";
echo "<br>";
$diaDaSemana = date("w"); //não precisa botar o echo, pois ão quer imprimir o texto//

if ($diaDaSemana == 0 ) { // == para fazer comparação//
    echo "domingo";
}elseif ($diaDaSemana == 1){
    echo "segunda";
}elseif ($diaDaSemana == 2){
    echo "terça";
}elseif ($diaDaSemana == 3){
    echo "quarta";
}elseif ($diaDaSemana == 4){
    echo "quinta";
}elseif ($diaDaSemana == 5){
    echo "sextouuu";
}elseif ($diaDaSemana == 6){
    echo "sábado";
}

echo "<br>";
echo "<br>";

switch ($diaDaSemana){ // serve para comparação de valores, não de validação// 
    case 0: 
        echo "domingo";
        break;
    case 1: 
        echo "segunda";
        break; 
    case 2:
        echo "terça";
        break;
    case 3: 
        echo "quarta";
        break;
    default: // se a validação chegou até aqui é pq não se achou com nem um case //
        echo "desconhecido";
         break;
}

echo "<br>";
echo "<br>";

for ($i=1; $i <= 10 ; $i++) { // função de laço, agrupamento de números //
    echo $i. "<br>";
}



?>