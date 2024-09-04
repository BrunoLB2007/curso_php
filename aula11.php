<?php 

// criar uma máscara de formatação pra telefone +55 (54) 99999999
function validarTelefone($telefone){
    $telefone = preg_replace( '/[^0-9]/is', '', $telefone ); 
    $dddtelefone = substr($telefone, 2, 2);
    $ddd = array(11, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 24, 27, 28, 31, 32, 33, 34, 35, 37, 38, 41, 42, 43, 44, 45, 46, 47, 48, 49, 51, 53, 54, 55, 61, 62, 63, 64, 65, 66, 67, 68, 69, 71, 73, 74, 75, 77, 79, 81, 82, 83, 84, 85, 86, 87, 88, 89, 91, 92, 93, 94, 95, 96, 97, 98);
    $dddvalido = in_array($dddtelefone, $ddd); // vai retornar true ou false 
    if (strlen($telefone) != 13) {
        return false;
    }

    $país = substr($telefone,0, 2); 

    if ( $país != 55)
    {
        return false;
   }

// precisa ainda validar os ddds
   return ($dddvalido);
}

function Masktelefone ($telefone){ 

    $telefoneMascarado = ""; 
    $masktelefone= "+## (##) # ########";
    $j = 0; 

    for ($i=0; $i<= strlen($masktelefone); $i++){

        if( $masktelefone[$i]== "#"){
            $telefoneMascarado .= $telefone[$j];
            $j++;
        }else {
            $telefoneMascarado .= $masktelefone[$i];
        }
    
    }

    return $telefoneMascarado;

}



$telefone = "5554992195322";
$telefonevalido = ValidarTelefone  ($telefone);
$telefone = Masktelefone($telefone);

if ($telefonevalido) {
    echo "o telefone: $telefone é valido ";
}else {
echo "o telefone : $telefone é invalido"; }






