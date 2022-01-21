<?php
$entero = 12;
$numnegativo = -145;
$flotante = 3.1416;
$cadenatxt = "cadena texto";
$boleano = true;
$boleano1 = false;
$varno = null;
$arrai = array (3,5,6);

print"<br>Tipo de dato numero entero: <br>".$entero;
print"<br><br>Tipo de dato numero negativo: <br>".$numnegativo ;
print"<br><br>Tipo de dato numero flotante: <br>".$flotante;
print"<br><br>Tipo de dato cadena de texto: <br>".$cadenatxt;
print"<br><br>Tipo de dato boleano verdadero: <br>".$boleano;
print"<br><br>Tipo de dato boleano falso: <br>".$boleano1;
print"<br><br> Tipo de dato Null".$varno;
print_r($arrai[1]);

print("<br><br>".gettype($entero));
print("<br><br>".gettype($varno));
print("<br><br>".gettype($boleano1));
print("<br><br>".gettype($numnegativo));
print("<br><br>".gettype($flotante));
print("<br><br>".gettype($cadenatxt));
?>