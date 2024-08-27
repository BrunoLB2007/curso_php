<?php 

/* construir funções (separadas) onde cada uma recee um parametro (string, texto)
e retorna um valor boolean (True||False)

objetivo: Validar um cpf e um cnpj 

dica, nome da função começa com isValid

isValidCPF isValidCNPJ

existe uma formula para validar cpf e cnpj 
cpf - 11 digitos
cnpj - 14 digitos 
*/

function isValidCPF ($cpf){

    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );//tira os caracteres especiais

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
    return false;
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}



if (isValidCPF("793.756.240-48") == true){
    echo "sadfsd";
}