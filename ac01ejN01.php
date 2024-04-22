
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio01</title>
</head>
    <h1>ejercicio1 <br/> </h1>
    <p>Escribir un programa donde nos de la bienvenida y nos indique en que navegador estamos </p>
<body>
<?php
"\n";
inicio();


function inicio ()
{
    $navegador = $_SERVER['HTTP_USER_AGENT'];

    echo '<h1>Bienvenido.</h1>';
    echo "<p>El navegador usado es: . $navegador </p>";
}
?>

</body>
</html>

