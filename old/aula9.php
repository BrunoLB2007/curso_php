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
$saldoatual = 100;

function banco ($operacao, $quantidade, &$saldoatual){

    if ( $operacao == "saque" && ($quantidade <= $saldoatual || $quantidade >= 0)){
        $saldoatual = $saldoatual - $quantidade;

    }elseif ($operacao == "saque" && ($quantidade > $saldoatual || $quantidade <= 0)){
        return "saldo insuficiente ";


    }elseif ($operacao == "deposito" && ($quantidade > 0|| $quantidade != "")){
       $saldoatual = $saldoatual + $quantidade;

    }else if ($operacao == "deposito" && ($quantidade <= 0|| $quantidade == ""))
        return "doposite um valor diferente de 0 ";
    

    elseif ($operacao == "extrato"){
        return  "você tem R$". $saldoatual ;

    }else 
        return "Insira uma operação valida" ;
}

echo "<br><br>";

echo banco ("saque", 0, $saldoatual);
echo "<br>";
echo banco ("deposito", 0, $saldoatual);
echo "<br>";
echo banco ("extrato", 0, $saldoatual);

