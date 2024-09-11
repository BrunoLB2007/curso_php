<?php

//Criar as operações matemáticas tilizando objetos. +-*/

class Operacoes {

    public $resultado;

    public function somar($valor, $valor2){

       $this->resultado = $valor += $valor2;

    }

    public function subtrair($valor, $valor2){

       $this->resultado = $valor += $valor2;

    }

    public function dividir($valor, $valor2){

        $this->resultado = $valor/$valor2;

    }

    public function multiplicar($valor, $valor2){

       $this->resultado = $valor*$valor2; 

    }

}

// $operacoes = new Operacoes();

// $operacoes->somar(10, 10);
// echo $operacoes->resultado;

// echo "<br>"; 

// $operacoes->multiplicar(10, 10);
// echo $operacoes->resultado;

//criar um objeto de sistema bancário (aula9) 
//deve ter as mesmas operações da aula9 mais a transferencia
//também fazer as validações das operações (já feitas inclusive)

class Banco {

    public $saldo = 50;
    public $erro = ""; 


    public function saque($quantidade){

        if ($quantidade > $this->saldo || $quantidade <= 0){
            $this->erro = "saldo insuficiente ";
         }else { 
            $this->saldo -= $quantidade;
         }

         return $this->retorno();
    }

    public function deposito($quantidade){

        if ($quantidade <= 0 || $quantidade == ""){
            $this->erro = "Insira um valor valido";
        } else {
            $this->saldo += $quantidade;
        }

        return $this->retorno();
    }

    public function extrato(){

        return  $this->saldo;
    }

    public function transferencia($quantidade, $destinatario){

        if ($quantidade > $this->saldo || $quantidade <= 0){
             $this->erro = "saldo insuficiente ";
        }elseif ($destinatario == ""){

            $this->erro = "Selecione um destinatário";

    
        }else{

            $this->saldo -= $quantidade;
            $destinatario += $quantidade;

        }

        return $this->retorno(); 
    }

    public function retorno (){

        if ($this->erro != ""){

            return $this->erro;
        }
        
        return "operação concluida";
    }

}
$banco = new Banco();
echo $banco->transferencia(50, "Lucas");



