<?php

class FormatarDados {

    // Propriedades || atributos
    public $texto;
    public $mascara;

    public function __construct($texto, $mascara)
    {
        $this->texto = $texto;
        $this->mascara = $mascara;
    }

    public function addMask($texto = "", $mascara = "") {
        
        // (1 == 1) ? true : false;

        // if (1 == 1) {
        //     true;
        // } else {
        //     false;
        // }

        $texto = $texto ? $texto : $this->texto;
        $mascara = $mascara ? $mascara : $this->mascara;

        $a = 0;
        $valorMascarado = "";
        
        for ($i=0; $i <= strlen($mascara); $i++) {
    
            if ($mascara[$i] == '#') {
                $valorMascarado .=  $texto[$a];
                $a++;
            } else {
                $valorMascarado .= $mascara[$i];
            }
    
        }
    
        return $valorMascarado;
    }

    public function addMaskCPF ($texto, $mascara ){ 
        $cpfMascarado = ""; 
        $j = 0; 
    
        for ($i=0; $i<= strlen($mascara); $i++){
    
            if( $mascara[$i]== "#"){
                $cpfMascarado .= $texto[$j];
                $j++;
            }else {
                $cpfMascarado .= $mascara[$i];
            }
        
        }
    
        return $cpfMascarado;
    }

    function addmascaraCNPJ ($texto, $mascara){ 
        $cnpjMascarado = ""; 
        $j = 0; 
    
        for ($i=0; $i<= strlen($mascara); $i++){
    
            if( $mascara[$i]== "#"){
                $cnpjMascarado .= $texto[$j];
                $j++;
            }else {
                $cnpjMascarado .= $mascara[$i];
            }
        
        }
    
        return $cnpjMascarado;
    }

    function Masktelefone ($texto, $mascara){ 

        $telefoneMascarado = ""; 
        $j = 0; 
    
        for ($i=0; $i<= strlen($mascara); $i++){
    
            if( $mascara[$i]== "#"){
                $telefoneMascarado .= $texto[$j];
                $j++;
            }else {
                $telefoneMascarado .= $mascara[$i];
            }
        
        }
    
        return $telefoneMascarado;
    
    }
    

}

$texto = "5554999912933";
$mascara = "+## (##) # ####-####";

$formatarDados = new FormatarDados($texto, $mascara); // instanciar o objeto
echo $formatarDados->addMask();





