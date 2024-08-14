<?php 

$alfa= ["a", "c", "b", "d"];
$tamanhoalfa= count($alfa);
$maxindice = $tamanhoalfa - 1;

for ($i = 0; $i < $tamanhoalfa; $i++) {

    $maxindice_2= $tamanhoalfa - $i - 1;

    for ($j = 0; $j < $tamanhoalfa_2 -1; $j++) {

        if ($alfa[$j] > $alfa[$j + 1]) {

            // Troca os elementos para ordenar corretamente

            $temp = $alfa[$j];
            $alfa[$j] = $alfa[$j + 1];
            $alfa[$j + 1] = $temp;
        }
     }
}


echo implode (", ", $alfa );




/*
Identificar o tipo de triangulo conforme os dados inseridos pelo usuário 
sendo três medidas: $lado1, $lado2, $lado3
A partir destas 3 medidas efetuar o calculo e informar qual o tipo de triangulo formado pelas medidas 

podem ser isoceles, equilatero ou escaleno 
*/

$lado1 = 0;
$lado2 = 0;
$lado3 = 1;

echo "<br>";

if ($lado1 == 0 || $lado2 == 0 || $lado3 == 0){
    echo "as medidas não formam um triangulo isoceles, equilatero ou escaleno ";

}elseif ($lado1 == $lado2|| $lado1 == $lado3|| $lado2 == $lado3){
    echo "triangulo isóceles";

}elseif ($lado1 != $lado2 && $lado2 != $lado3){
    echo "triangulo escaleno";

}elseif ($lado1 == $lado2 && $lado2 == $lado3){

    echo "triangulo equilatero";

}else 
    echo "as medidas não formam um triangulo isoceles, equilatero ou escaleno ";
