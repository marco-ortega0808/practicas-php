<?php


print("<br>---------------------Calculadora-------------------------------------<br><br>");


if(isset($_POST['submit'])){
    $valor_1 = $_POST['valor1'];
    $valor_2 = $_POST['valor2'];
    //$text = "";
    if($valor_1 >0 && $valor_2>0 || $valor_1<0 && $valor_2<0 || $valor_1<0 && $valor_2>0 || $valor_1>0 && $valor_2 <0){
        $respuesta = $valor_1 + $valor_2;
        print("<h1>".$valor_1." + ".$valor_2." = ".$respuesta."</h1>");
    }
    /*elseif (gettype($valor_1) === gettype($text) && gettype($valor_2) === gettype($text)) {
        print("Ingresa solo números");
    }
    elseif (gettype($valor_1) === gettype($text) && $valor_2>0 || $valor_2<0 && gettype($valor_1) === gettype($text)) {
        print("Dato no validado al ingrsar el primer valor");
    }*/
    else {
        print("Dato no validado");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica PHP</title>
</head>
<body >
    <p style="font-size:24px;">Suma de dos números</p>
    <form action="practica4.php" method="POST">
        <input type="text" name="valor1" placeholder="Ingresa Valor 1"><br>
        <br>
        <input type="text" name="valor2" placeholder="Ingresa Valor 2"><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
    
</body>
</html>