<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio03</title>
</head>
<body>
    <h1>ejercicio3 <br/> </h1>
    <p>Escribir un programa para imprimir N números primos generados de forma aleatoria, que no se repitan y sean menores al 110.</p>

<?php
function generarNumerosPrimosAleatorios($cantidad, $rango_maximo) {
    $numerosPrimosAleatorios = array();
    $intentos = 0;

    while (count($numerosPrimosAleatorios) < $cantidad && $intentos < 1000) {
        $numero = rand(1, $rango_maximo);

        if (esPrimo($numero) && !in_array($numero, $numerosPrimosAleatorios)) {
            $numerosPrimosAleatorios[] = $numero;
        }

        $intentos++;
    }

    return $numerosPrimosAleatorios;
}

function esPrimo($numero) {
    if ($numero <= 1) return false;
    if ($numero <= 3) return true;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['elementos']) && is_numeric($_POST['elementos']) && $_POST['elementos'] > 0) {
        $elementos = $_POST['elementos'];
        $rango_maximo = 110; // El rango máximo permitido

        $numerosPrimosAleatorios = generarNumerosPrimosAleatorios($elementos, $rango_maximo);

        if (!empty($numerosPrimosAleatorios)) {
            echo "<p>Números primos generados aleatoriamente:</p>";
            foreach ($numerosPrimosAleatorios as $numero) {
                echo $numero . " ";
            }
        } else {
            echo "<p>No se encontraron números primos dentro del rango especificado.</p>";
        }

        echo '<br><a href="ac01ejN03.php">Retornar al formulario</a>';
    } else {
        echo '<p>ingresa un número válido de elementos.</p>';
    }
} else {
    echo '<form method="POST" action="">
        <label for="elementos">Ingresa el número de elementos:</label>
        <input type="number" id="elementos" name="elementos" required>
        <button type="submit">Generar números primos</button>
    </form>';
}
?>

</body>
</html>
