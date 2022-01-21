<?php
function mostar(){
    print("Número 2");
}
mostar();#se llama la funcion para que el cuerpo sea ejecutado

function mostrar_num($mostar){
    print("<br>Número ".$mostar);
}#la variable que recerva su espacio em memoria sera sustituida por el asignacion que se precenta en $numero
$numero=3;
mostrar_num($numero);

function produc($valor1, $valor2){
    $resul = $valor1*$valor2;
    print("<br>Resultado: ".$resul);
}#Toma el valor de las variable fuera de la funcion para poder realizar la opracion
$numero1=3;
$numero2=9;
produc($numero1, $numero2);

function comprobar(){
    $numerodeargu=func_num_args();
    print("<BR><u>Uso de func_num_args()-</u> <br>");//-----Devuelve el numero total de argumentos
    print("El número de argumentos es ".$numerodeargu."<br>");
//-----------func_get_arg()
    print("<u>Uso de func_get_arg()-</u> <br>");
    for($con=0; $con<$numerodeargu; $con++){
        $argumento=func_get_arg($con);//Resive un numero del argumento y lo regresa
        print("El argumento ".$con." tiene el valor ".$argumento."<br>");
    }
    print("<br");
    //Uso de func_get_args()
    print("<u>Uso de func_get_args()-</u> <br>");
    $matrizarg=func_get_args();//Recive todo los numeros y regresa todos los argumentos
    for($con=0; $con<$numerodeargu; $con++){
         $argumento=$matrizarg[$con];
        print("El argumento ".$con." tiene el valor ".$argumento."<br>");

    }
}   
$variable1=1;
$variable2="HOla";
$variable3="Adios";
comprobar($variable1,$variable2,$variable3);


function cuadrado($nume){
    $nume*=$nume;//En esta funcion si le agragamos un & apartie de que invocamos la funcion tendra ese valor
    print("En la funcion el numero se eleva al cuadrado, obteniendo el resultado: ".$nume."<br>");
}
$nume=3;
print("El numero, antes de invocar la funcion vale: ".$nume."<br>");
cuadrado($nume);
print("El numero, despues de invocar la funcion vale: $nume <br>");

function recta($numeros){
    $numeros*=$numeros;
    return $numeros;
}
$numerom=310;
$trin=recta($numerom);
print("<br>El cuadrado del numero $numerom es $trin");

//--------Ambito de las variables-------
function trina($nu){
    $cuadrado=$nu*$nu;
    print("<br>El cuadrado de $nu es $cuadrado <br>");
}
$nu=5;
trina($nu);
print("la variable ".$nu." vale ". $nu." y es de tipo ".gettype($nu)."<br>");
print("la variable ".$cuadrado." vale ". $cuadrado." y es de tipo ".gettype($cuadrado)."<br>");

?>
