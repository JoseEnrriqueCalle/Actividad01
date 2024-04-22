<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio04</title>
    
</head>

<body>
    <h1>ejercicio4 <br/> </h1>
    <p>Escribe un programa que pida una frase y escriba:
    * Cuantas veces aparece la letra “o”. Ejemplo Hola → 1
    * Las vocales que aparecen. Ejemplo Hola → 2
    * Cuántas veces aparecen cada una de las vocales.Ejemplo Hola → o:1 , a:1</p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="frase">Ingrese una frase:</label>
        <input type="text" id="frase" name="frase">
        <button type="submit">Enviar</button>
    </form>
    <br>

    <?php
    function contarLetra($frase, $letra) {
        $contador = 0;
        $frase = strtolower($frase); 
        $letra = strtolower($letra); 
        for ($i = 0; $i < strlen($frase); $i++) {
            if ($frase[$i] == $letra) {
                $contador++;
            }
        }
        return $contador;
    }

    function contarVocales($frase) {
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        $resultado = array();
        foreach ($vocales as $vocal) {
            $contador = contarLetra($frase, $vocal);
            if ($contador > 0) {
                $resultado[$vocal] = $contador;
            }
        }
        return $resultado;
    }

   
    function imprimirResultados($frase) 
    {
        echo "<p>La frase es: $frase</p>";

        $vocales = contarVocales($frase);
        echo "<p>Las vocales que aparecen son: "  . implode(", ", array_keys($vocales)) . "</p>";
        
        foreach ($vocales as $vocal => $cantidad) 
        {
            echo "<p>Cantidad de veces que aparece la vocal '$vocal': $cantidad</p>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = $_POST["frase"];
        if (!empty($frase)) {
            imprimirResultados($frase);
        } else {
            echo "<p>Por favor, ingrese una frase.</p>";
        }
    }
    ?>
</body>
</html>
