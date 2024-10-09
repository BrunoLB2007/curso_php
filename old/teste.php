<?php 

// Definindo as dimensões da matriz
$rows = 3;
$cols = 4;

// Inicializando a matriz
$matriz = array();

// Preenchendo a matriz com valores
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        // Gerando um valor para a célula [i][j]
        $matriz[$i][$j] = $i * $cols + $j + 1;
    }
}

// Exibindo a matriz
echo "Matriz gerada:<br>";
echo "<table border='1'>";
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) {
        echo "<td>" . $matriz[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
