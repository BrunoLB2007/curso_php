<?php 
//matriz é basicamente linhas e colunas, ex do exel 
//$vetor = array()

$vetor = array();
//$i =   0, 1, 2, 3, 4     a posição começa no 0 
$vetorpar = [];
$vetorimpar = [];

//$tamanho = count($vetor);  //serve para contar a quantidade de entidades dentro d variavel 
$somadospares = 0; 
$somadosimpares = 0;

for ($i=1; $i < 100; $i++){
    if ($i % 2 == 0){ //valida se o numero é par 

        $somadospares += $i;
        // $vetorpar = array_push($vetorpar, $i);
        $vetorpar[] = $i;  // aqui etra só o numero par 
        
    }else { // se o numero nn for para vai entrar aq 

        $somadosimpares += $i;
        //$vetorimpar = array_push($vetorimpar, $i);
        $vetorimpar[] = $i;// aqui só entra os numeros impares
    }
}

//colocar em ordem crescente 
for ($i = 0; $i < count($vetorpar); $i++){

}

//colocar em ordem decrescente 
for ($i = 0; $i < count($vetorpar); $i++){

}





for ($i = 0; $i < count($vetorpar); $i++){
    echo $vetorpar[$i]. ", ";// essa linha percorre o vetor e mostra o que tem em cada célula dele
}



for ($i = 0; $i < count($vetorimpar); $i++){
    echo $vetorimpar[$i]. ", ";
}



//HAHA agr fudeo 
//Refazer essa merda toda só que ao contrário!!!! 
//Agr tem que ser em ordem decrescete 
// pesquisar por formas de ordenar array 

