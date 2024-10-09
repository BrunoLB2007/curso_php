<?php 
// fazer o mesmo exercício da tabuada só que com o laço while//

$numero = 5;

$i = 2;


// while( $i !=11 ){

//     $resultado = $numero * $i ;
//     echo $numero ."X" . $i . "=". $resultado . "<br>";
//     $i++;
// }

// mostrar os número pares do dois ao 20 utilizando laços while e for//
//$i++ é a msm coisa que $i = $i+1 //

// while ( $i <=12){
//     $resto = $i%2;// %2 = 0 é pq é par %2 = 1 é pq é impar// 
//     if ($resto == 0){
//         echo $i . "<br>"; //echo $i pq ela ta em loop, vai passar na condição e vai ser mostrada se a condição for verdadeira// 
//     }
//     $i++; 
// }

// echo "<br>";

// for ($i= 2; $i <=12; $i++){
//     $resto = $i%2;
//     if ($resto == 0){
//         echo $i . "<br>";
//     }
// }

// somar todos os numeros de 0 a 100 utilizando o laço de repetição while e mostrar o resultado
    // 0 + 1 + 1 
    // 1 + 2 = 3
    // 3 + 3 = 6 ...


echo "<br>";
$soma = 0; 
$i = 1;

while ( $i <=100 ){

    $soma = $soma + $i;

    $i++;
}
echo " a soma de 1 ao 100 é:" . $soma; 

/*
    somar todos os numeros pares de 1 até 100
    somar todos os numeros impares de 1 ate 100 
    utilizar while 
    mostrar o resltado da soma dos pares e o resultado da soma dos impares

*/









