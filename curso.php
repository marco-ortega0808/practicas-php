<?php

/*print"<h1>Intro</h1>";

$var = print('un print dentro de una variable');
//$varb = echo ("un echo dendotro de una variable sin parentesis");

define("Constante", "<br><br>Esta es un aonctante");
print(Constante);

define("NUM", 1291);
print NUM;
echo NUM;
#Linea de comentario
//Liena de comentario

    Multilinea de comentario
    asdas
    asdasd

$vas ="asd";
echo"<br>Este es mi $vas <br><br>";
*/
$numer =5;
var_dump($numer);// se muestra el tipo de dato con el valor
print gettype($numer); //tipo de dato
print("<br><br>");
$float = 5.55;
var_dump($float);// se muestra el tipo de dato con el valor
print gettype($float); //tipo de dato
print("<br><br>");
$bolean = false;
var_dump($bolean);// se muestra el tipo de dato con el valor
print gettype($bolean); //tipo de dato
print("<br><br>");

$strin = "Texto prueba";
var_dump($strin);// se muestra el tipo de dato con el la cantidad de datos
print gettype($strin); //tipo de dato
print("<br><br>");

$sin = null;
var_dump($sin);// variable no declarada 
print gettype($sin); //variable no declarada
print("<br><br>");

//---------------------------Operadores---------------------
print 58+21;
print("<br><br>");
print 58-21;
print("<br><br>");
print 58*21;
print("<br><br>");
print 58/21;
print("<br><br>");//Operaciones simples en una emprsión 
print 58%21;
print("<br><br>");

$mul = 4;
$mul += 6;
$mul = $mul +20;
$mul -= $mul -15;
$mul *= 2;
$mul /= 3;
print $mul;
print("<br><br>");

//---------------compraracion----------------

$x =10;
$y =9;
var_dump ($x!=$y);
print("<br><br>");

//----------------------Imcremetos y decrementos------------

$incre = 5;

//print ++$incre;
//print $incre++;
//print --$incre;
print $incre--;
//-------------------condicionales--------------
print("<br><br>");
$condi = 25;
if($condi > 49){
    print (")$condi es mayor que 49");
}
elseif ($condi <= 49) {
    print("$condi es menor que 49");
} 
else {
    print"no valido";
}

print("<br><br>");
$swit = "black";

switch ($swit) {
    case 'black':
        print("este es el color negro");
        break;
    case 'red':
        print("este color es rojo");
        break;
    default:
        print("color no detectado");
        break;
}
//-----------------------while---------------
print("<br><br>");
$wile = 5;
while ($wile <= 10) {
    print $wile++."<br>";//El ciclo termina cuando el incremento termina en 10
}

print("<br><br>");
//------------------For--------------
$i = 21;
for ($i=0; $i <20 ; $i++) { 
    print("El valor es : $i");
}

print("<br><br>");

//---------------array------------ 
$aray = ["hola", "mundo"];
print $aray[1];
print("<br>");print("<br>");
$aray_a = ['array1'=>33, 'array20'=>55];
print $aray_a['array1'];
//---------------------------funciones-------------------
function prue(){
    print("Diferentes manera de hacer una funcion");
}
prue();
print("<br><br>");

function funciones_ar($repues){
    $sum= 64;
    $repues = $repues-$sum;
    print("el argumento es $repues");
}
funciones_ar(54);
print("<br><br>");

?>