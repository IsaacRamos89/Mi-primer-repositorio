
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matrices</title>
</head>
<body>
    <h2>Matrices</h2>
   <?php
$n = array ();
$valor = 100;
for ($f = 0; $f < 3; $f++) {
    for ($c = 0; $c < 3; $c++) {
        $n[$f][$c] = $valor;
        $valor+=10;
    }
}

echo "<br> Matriz A";
echo "<table border='1'>";
for ($f = 0; $f < 3; $f++) {
    echo "<tr>";
    for ($c = 0; $c < 3; $c++) {
        echo "<td>".$n[$f][$c]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

$n1 = array ();
$valor1 = 500;
for ($f1 = 0; $f1 < 3; $f1++) {
    for ($c1 = 0; $c1 < 3; $c1++) {
        $n1[$f1][$c1] = $valor1;
        $valor1+=20;
    }
}

echo "<br> Matriz B";
echo "<table border='1'>";
for ($f1 = 0; $f1 < 3; $f1++) {
    echo "<tr>";
    for ($c1 = 0; $c1 < 3; $c1++) {
        echo "<td>".$n1[$f1][$c1]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

$n2 = array ();
for ($f2 = 0; $f2 < 3; $f2++) {
    for ($c2 = 0; $c2 < 3; $c2++) {
        $n2[$f2][$c2] = $n[$f2][$c2]+$n1[$f2][$c2];
    }
}

echo "<br> Matriz C";
echo "<table border='1'>";
for ($f2 = 0; $f2 < 3; $f2++) {
    echo "<tr>";
    for ($c2 = 0; $c2 < 3; $c2++) {
        echo "<td>".$n2[$f2][$c2]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
