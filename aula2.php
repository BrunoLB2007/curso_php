<?php

$nome = "Bruno Beltran";

$idade = 18;

$cidade = "xique-xique bahia";

echo "Seja bem vindo $nome à sua cidade $cidade, feliz aniversário de $idade anos de idade"; 

echo "<br>";

if ($idade >= 18) {
    echo "Parabéns $nome, vc pode ser preso!";
}else{ echo " $nome ainda não pode ser preso";
}

//else não precisa criar outra variavel if//

echo "<br>";
echo "<br>";

echo "Super calculadora utilizada pela nasa para ir à lua:";

echo "<br>";

$valorA = 2;
$valorB = 0;
$operacao = "adição";
$resultado="";

//variável resultado vai ser definida pelas operações if//

if ($operacao == "soma" || $operacao == "adição"|| $operacao == "mais"){
    $resultado = $valorA + $valorB;
}elseif($operacao == "subtrair"|| $operacao == "diminuir"){
    $resultado = $valorA - $valorB;
}elseif($operacao == "multiplicação"|| $operacao == "vezes"){
    $resultado = $valorA * $valorB;
}elseif($operacao == "divisão"|| $operacao == "dividir"){
    $resultado = $valorA/$valorB;
}else{
    echo "somente são aceitos os comandos:<br> soma ou adição <br>
     subtrair ou diminuir<br>
      multiplicação ou vezes <br>
       divisão ou dividir";
}

echo "<br>";

//elseif serve para fazer outra validação caso a anterior seja falsa//
if ($resultado != ""){
echo "A operação escolhida foi $operacao com os valores $valorA e $valorB e o resultado é $resultado.";
}

//!= significa diferente//
echo "<br>";
//testa se a pessoa pode tirar cnh, tem q ser maior de 18 e ter mais de R$ 1000,00//

$idadePessoa = 17.999999;
$dinheiro = 1000;
echo "<br>";
echo "Tirador de cnh 2000:";
echo "<br>";
if($idadePessoa >= 18 && $dinheiro >=1000){
    echo "Parabéns, você é apto a tirar a cnh";
}elseif ($idadePessoa <18 && $dinheiro <1000){
    echo "Você não tem a idade necessária e é pobre. Deve ter 1K e ser maior de 18 anos";
}elseif ($idadePessoa <18){
    echo "Você é muito jovem, precisa ter 18";
}elseif ($dinheiro <1000){
    echo "Você é pobre, precisa ter 1K";
}






?>