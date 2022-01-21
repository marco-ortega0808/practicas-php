<?php
/*
    server
    request
    post
    get
    sessions
    cookes
*/
    /*if(isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];

        print("Mi usuario es: $usuario y mi email es: $email");
    }*/
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica php</title>
</head>
<body>
    <!--<form action="curso_2_0.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="submit" name="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
    
    <a href="pureba.php?lang=php&coursep=ubuntu">get link</a>-->
<p><?php print $_SESSION['usuario']." asd ".$_SESSION['age']; ?></p>

</body>
</html>
