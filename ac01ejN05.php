<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5</title>
</head>   
    
<body>
    <h1>ejercicio5 <br/> </h1>
    <p>En base a 2 array de nombres y apellidos, genere un nuevo array combinando de forma
aleatoria ambos, formatee los nombres convirtiendo el primer elemento del nombre y apellido en
mayúscula y el resto en minúscula .</p>
<?php
//aqui lo modifique para ver si realmente formatea los primeros valores o no 
$nombres = array("juAn", "maRia", "PeDro", "Ana", "LuIs", "lAuRa", "caRlos", "Sofia", "mIguel", "ElEna");
$apellidos = array("gOmEz", "rOdriguez", "loPez", "Fernandez", "mArtinez", "pErez", "gOnzales", "sAnchez", "sAntieSTeban", "elena");

function nombres_aleatorios($n_elementos) {
    global $nombres, $apellidos;
    for ($i = 0; $i < $n_elementos; $i++) 
    {
        $nombre_aleatorio = $nombres[array_rand($nombres)];
        $apellido_aleatorio = $apellidos[array_rand($apellidos)];
        echo ucfirst(strtolower($nombre_aleatorio)) . " " . ucfirst(strtolower($apellido_aleatorio)) . "<br>";
           
    }  
}
nombres_aleatorios(15);
?>



    
</body>
</html>