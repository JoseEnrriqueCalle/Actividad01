<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio02</title>
</head>
<body>

    <h1>ejercicio2 <br/> </h1>
    <p>Escribir un programa donde nos solicite un usuario y contraseña, validar la contraseña con
    “D153n0W3b2” y el usuario debería ser cualquiera de los siguientes nombres: juan, pedro, maria, raul.</p>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario']; 
    $contraseña = $_POST['contraseña']; 
    
    if (iniciarSesion($usuario, $contraseña)) {
        echo "¡Inicio de sesión exitoso!";
       
        $mostrar_formulario = false;
    } else {
        echo "Usuario o contraseña incorrectos."."<br/>";
        echo "<br/>";
        $mostrar_formulario = true;
    }
}

 function iniciarSesion($usuario, $contraseña) {
    $nombres_permitidos = array("juan", "pedro", "maria", "raul");
    $contraseña_esperada = "D153n0W3b2";
    if (in_array($usuario, $nombres_permitidos) && $contraseña === $contraseña_esperada) {
        return true;     
    } else {
        return false;
    }
}
 if (!isset($mostrar_formulario) || $mostrar_formulario)
{ ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Usuario:    <input type="text" name="usuario"><br><br>
        Contraseña: <input type="password" name="contraseña"><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
<?php 
} 
else 
    { ?>  
    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Volver a iniciar sesión</a>
<?php } 

?>
</body>
</html>
