<?php 


// function tabuada($tabuada){

// echo "<br>tabuada do  $tabuada: <br>";

//   for( $numero = 0; $numero <= 10; $numero ++){  

//       echo " $tabuada X $numero =". $tabuada*$numero. "<br> ";
//    }
// }

// tabuada (5);


/*criar uma calculadora usand funções, recebendo 2 numeros
realizar as operações de + - * /
retornar o resultado para o usuário, salvar em uma outra variavel e exibir o valor. 
fase 2, agora adicionar calculo de percentual 
*/

function calculadora ($num1, $operacao, $num2){

    if ($operacao ==  "+") { 

    $resultado = $num1 += $num2;

    }elseif ( $operacao == "-"){

    $resultado = $num1 - $num2;

    }elseif ($operacao == "*"){

    $resultado = $num1* $num2;

    }elseif  ( $operacao == "/"){ 

    $resultado = $num1/$num2;

    }elseif  ( $operacao == "%"){ 

        $porcentagem = $num1/100;
        $resultado = $porcentagem * $num2;

    }else 
        return "operção invalida, isira um dos seguintes caracteres + - * / %"; 
    
    return $resultado;
}

// echo calculadora( 10, "%", 50);

/*
Criar um sistema bacário utilizando funcoes 
ele deve ser capaz de realizar depósitos, saques e extratos 
*/

echo "SISTEMA BANCARIO<br>insira uma operação ";
function banco ($operacao, $quantidade){

    $saldo = array(100);

    if ( $operacao == "saque "){
       $saldo[1] - $quantidade;
        return $saldo[1];

    }elseif ($operacao == "deposito"){
        $saldo[1] + $quantidade;
        return $saldo[1];

    }elseif ($operacao == "extrato"){
        return  "você tem R$". $saldo [1];
    }
    return $saldo [1];
}

echo banco( "extrato", 0);

