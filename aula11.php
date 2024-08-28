<?php 

// criar uma máscara de formatação pra telefone +55 (54) 99999999

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

echo Masktelefone ("5554992195322");