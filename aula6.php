<?php 

for ($i=1; $i <=100; $i ++){

    $resto = $i%2;

    if ($resto == 0){

        $somadospares += $i; 

    }else {

        $somadosimpares += $i; // isso é a msm coisa q fazer $somadosimpares = $somadosimpares + $i 
    }
}

echo "a soma total dos pares é $somadospares <br>";
echo "a soma total dos impares é $somadosimpares <br>";

$somadospares = 0; 
$somadosimpares = 0;
$w = 1;

while ($w <= 100 ){ 

    if ($w % 2 == 0){

        $somadospares += $w;

    }else { //se o if n for verdade, ou seja, se o numero foi impar 

        $somadosimpares += $w;
    }

    $w++; 
}

echo "<br>usando while <br>
A soma das pares é $somadospares <br>
A soma dos impares é $somadosimpares <br>";



echo "<br>";
echo "tabuada mais complexa que antes <br>";
$numero = 2 ; 
 
for ($f=0; $f <=10; $f++){
    echo "<br>tabuada do  $f: <br>";
    for ( $numero = 0; $numero <= 10; $numero ++){  //boa sorte fdp 

        echo " $f X $numero =". $f*$numero. "<br> ";
    }
}







