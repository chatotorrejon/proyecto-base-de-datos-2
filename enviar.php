<?php 
    $destino = "alfredodelope@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $pais = $_POST["pais"];
    $curso = $_POST["curso"];
    $mensaje = "nombre: " . $nombre . "\ncorreo:" . $correo . 
                "\ntelefono" . $telefono . "\npais" . $pais . "\ncurso" . $curso;
    mail($destino, "INFORMACION DE LOS DATOS: " , $mensaje);
    header("location: gracias.html");            
?>