<?php
$edad = 18;
if ($edad >= 18){
    print("El usuario es mayor de edad.<br>");
}
if ($edad>65){
    print("El usuario ya esta viejit@ <br>");
}
/*el palabra reservada if evalua el parametro condicional, si el if depende de la condicion no necesario 
las llaves*/

$edad_m = 15;
if ($edad_m >= 18){
    print("El usuarios es mayor de edad.<br>");
}
else{
    print("El usuario es menor de edad<br>");
}
#si la sentencia de if se comple se ejecutara su contenido, y si no se ejecutareal el del else

$edad_mayor = 35;
if ($edad_mayor >= 18 && $edad_mayor < 55){
    print("El usuarios todavia puede laborar<br>");
}
else{
    print("El usuario no puede laborar<br>");
}
#El operador logico AND o Y "&&" solo puede ser tomado como verdadero si se cumplen las dos sentencias.

$edad_menor = 16;
$permiso = false;
if ($edad_menor >= 18 || ($edad_menor == 16 && $permiso == true)){
    print("El usuarios es mayor de edad, o si tienes 16 puedes entrar con algún permiso.<br>");
}
else{
    print("El usuario no puede acceder.<br><br>");
}
#El operador OR u O "||" puede ser verdadero si alguna de sus condiciones se cumple

$promedio = 7;
if($promedio == 10){
    print("Exelente tu promedio es : <br>".$promedio);
}
elseif($promedio <10 && $promedio >=9){
    print("Muy bien tu promedio es <br>: ".$promedio);
}
elseif($promedio < 9 && $promedio >= 7){
    print("Bien pero puede mejorar<br>");
}
elseif($promedio<7) {
    print("falta mejorar<br><br>");
}
else {
    print("Promedio invalido<br>");
}
#La sentencia Elseif es establecido cuando una condicion se tiene que evaluar varias veces

$pais = "Mexico";
switch ($pais) {
    case "Inglaterra":
        print("El usuario es ingles.<br>");
        break;
    case "EU":
        print("El ucuario es Estadounidence<br>");
        break;
    case "Mexocp":
        print("El usuario es Mexicano <br>");
        break;
    default:
        print("El usuario no es espesifico nacionalidad");
        break;
}
#-------------bucles-----------

for ($i=1; $i<=10; $i++) { #Podemos estar resta dando diciendole al paso que reste como $i--
    $multi=7*$i;
    print("<br>".$i."* 7 = ".$multi);
}

for ($j=10; $j>=0; $j-=2) { #El paso se restara en 2 tambien puede incrementar
    print("<br> Número restando ciclo: ".$j."<br>");
}

$nombre = array ("Marco", "Alfonso", "sonai","Resto");
$cantidad = count ($nombre);
for($ma=0; $ma<$cantidad; $ma++){
    print("<br>".$nombre[$ma]."<br>");
}#For con matris definiendo la candidad de valores en la matriz

for ($piso=1; $piso<=5; $piso++) { 
    print("<br>");
    for ($puerta=1; $puerta<=4; $puerta++) { 
        print("Piso: ".$piso."- Purta: ".$puerta."<br>");
    }
}

$cuidades = array ("Madrid", "Barcelona", "Londres","Guadalajara", "CDMX");
$ciudad = "";
$indice = 0;
while ($ciudad!="Madrid"){
    $ciudad=$cuidades[$indice];
    print($ciudad."<br>");
    $indice++;
    #Ejecuta el bucle para mostrar el contenido de la Matriz
}

$ciudades = array ("Madrid", "Barcelona", "Londres","Guadalajara", "CDMX");
foreach($ciudades as $clave => $calor){
    print("La ciudad clave con el indice ".$clave." tiene el valor ".$calor."<br>");
}

$amigos = array (array("nombre"=>"Memo ", "direccion"=>"A.v Luz casa", "tel"=>5520413865), 
array("nombre"=>"Cruz", "direccion"=>"A.v Luz ", "tel"=>5520141635), 
array("nombre"=>"Marco", "direccion"=>"Luz casa", "tel"=>5520454455));

foreach($amigos as $cu => $cadau){
    print("En ".$cu." Tiene el amigo: <br>");
    foreach($cadau as $clave => $valor){
        print($clave.": ".$valor."<br>");
    }
}
?>