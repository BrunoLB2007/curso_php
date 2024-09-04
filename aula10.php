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
    for ($i = 9; $i < 11; $i++) {
        for ($d = 0, $c = 0; $c < $i; $c++) {
            $d += $cpf[$c] * (($i + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}



if (isValidCPF("793.756.240-48") == true){
    echo "o cpf:inserido é valido";
}


function IsValidCNPJ ($cnpj){

    $cnpj = preg_replace( '/[^0-9]/is', '', $cnpj );

    if (strlen($cnpj) != 14){
        return false;
    }

    if (preg_match('/(\d)\1{10}/', $cnpj)){
        return false;
    }

    $b = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

    for ($i = 0, $n = 0; $i < 12; $n += $cnpj[$i] * $b[++$i]);  {
}
 if ($cnpj[12] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
        return false;
    }
    for ($i = 0, $n = 0; $i <= 12; $n += $cnpj[$i] * $b[$i++]);
    if ($cnpj[13] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
        return false;
    }
  return true;
}



function addMaskCPF ($cpf){ 
    $cpfMascarado = ""; 
    $maskcpf= "###.###.###-##";
    $j = 0; 

    for ($i=0; $i<= strlen($maskcpf); $i++){

        if( $maskcpf[$i]== "#"){
            $cpfMascarado .= $cpf[$j];
            $j++;
        }else {
            $cpfMascarado .= $maskcpf[$i];
        }
    
    }

    return $cpfMascarado;
}

echo addMaskCPF("12345678910");


function addMaskCNPJ ($cnpj){ 
    $cnpjMascarado = ""; 
    $maskcnpj= "##.###.###/####-##";
    $j = 0; 

    for ($i=0; $i<= strlen($maskcnpj); $i++){

        if( $maskcnpj[$i]== "#"){
            $cnpjMascarado .= $cnpj[$j];
            $j++;
        }else {
            $cnpjMascarado .= $maskcnpj[$i];
        }
    
    }

    return $cnpjMascarado;
}