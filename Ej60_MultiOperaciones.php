<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos de operaciones</title>
</head>
<body>
    <h2>OPERACIONES DE 2 ARREGLOS</h2>
    <form method="POST" action="">
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "Numero 1:";
            echo "<input type='number' name='n1[]'>" . " ";
            echo "Numero 2:";
            echo "<input type='number' name='n2[]'>" . " ";
            echo "<br><br>";
        }
        ?>
        <button type="submit" name="guardar" value="guardar">
            Guardar y calcular
        </button>
        <?php
        if (isset($_POST['guardar'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $validar = true;
            for ($i = 0; $i < 3; $i++) {
                if ($n1[$i] <= 50 or $n1[$i] >= 100 or $n2[$i] >= 0 or $n2[$i] <= -51) {
                    $validar = false;
                }
            }
            if ($validar == true) {
                $suma = array();
                $resta = array();
                $multi = array();
                $divi = array();
                for ($i = 0; $i < 3; $i++) {
                    $suma[$i] = $n1[$i] + $n2[$i];
                    $resta[$i] = $n1[$i] - $n2[$i];
                    $multi[$i] = $n1[$i] * $n2[$i];
                    $divi[$i] = $n1[$i] / $n2[$i];
                }
                echo "<h3>NUMEROS 1</h3>";
                for ($i = 0; $i < 3; $i++) {
                    echo $n1[$i] . "<br>";
                }
                echo "<h3>NUMEROS 2</h3>";
                for ($i = 0; $i < 3; $i++) {
                    echo $n2[$i] . "<br>";
                }
                echo "<h3>SUMA</h3>";
                for ($i = 0; $i < 3; $i++) {
                    echo $suma[$i] . "<br>";
                }
                echo "<h3>RESTA</h3>";
                for ($i = 0; $i < 3; $i++) {
                    echo $resta[$i] . "<br>";
                }
                echo "<h3>MULTIPLICACION</h3>";
                for ($i = 0; $i < 3; $i++) {
                    echo $multi[$i] . "<br>";
                }
                echo "<h3>DIVISION</h3>";
                for ($i = 0; $i < 3; $i++) {
                    echo number_format($divi[$i],2) . "<br>";
                }
            }
            else {
                echo "<h3>ERROR; Uno de los valores colocados no cumple las condiciones requeridas.</h3>";
            }
        }
        ?>
    </form>
</body>
</html>