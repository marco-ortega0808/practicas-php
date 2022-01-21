<?php
/*define("Pi", 3.1416); #Definimos nuestra constante Pi que no podra ser modificada
echo("El valor de Pi es: ".Pi);*/

#echo(defined("PI", 3.141));#Este argumento arrojara un valor boleano en este ecaso es verdaero o defined("Pi") falso

define("colorDes", "blue");
echo("<font color=".colorDes.">");
echo("sdassafbasjb");
$colorDes = "green";
echo("<br><font color=".$colorDes.">");
echo("sdassafbasjb<br><br>");
#En PHP permite tener una varible y una constante con el mismo nombre y poder diferenciarlas

#----------------Matriz-------------------------
$nomber = array ("Ortega", "Marco", "Trejo", "Antonio");
print($nomber[1]." ".$nomber[3]." ".$nomber[0]." ".$nomber[2]."<br><br>");
#Posicion que lleva el contendio de una matris 
$tipos_variables = array ("Pedro", 22, TRUE);
print($tipos_variables[0]."<br>");
print($tipos_variables[2]."<br>");
print($tipos_variables[1]."<br><br>");
#Tambien puede almacenar diferentes tipos de varibles 

$orden_nom = array ("Ortega", "Marco", "Trejo", "Antonio");

print($orden_nom[0]."<br>");
print($orden_nom[1]."<br>");
print($orden_nom[2]."<br>");
print($orden_nom[3]."<br>");
$orden_nom[4] = "susana";
print($orden_nom[4]."<br><br>");
#Una forma de poder agragar un contenido a la matris asignandole el indice consecutivo 

$asiganar_num = array ("Ortega", "Marco", "Trejo", "Antonio<br>");
$primer_nombre = 1;
print($asiganar_num[$primer_nombre]."<br><br>");
#Se puede selecionar el indice por medio de una varible para poder asignarle un valor 

$asigna_posicion = array (1=>"Ortega", "Marco", "Trejo", "Antonio<br>");
print($asigna_posicion[1]."<br>");
print($asigna_posicion[2]."<br>");
print($asigna_posicion[3]."<br>");
print($asigna_posicion[4]."<br><br>");
/*Con el operador => le asignamos un indice de donde empesara la secuencia y 
$nombre[34] asigna el infice donde se decia almacenar*/

#--------------------Matris asociativa--------------------
$amigo = array ("nombre"=>"Memo Cruz", "direccion"=>"A.v Luz casa", "tel"=>5520413865);
print($amigo["nombre"]."<br>");
print($amigo["direccion"]."<br>");
print($amigo["tel"]."<br><br>");
#Remplaza el indice numeorico por un variable que pueda almacenar el contenido con el operador =>

#------------------Matriz mixta---------------
$amigos_mixs = array (array("nombre"=>"Memo ", "direccion"=>"A.v Luz casa", "tel"=>5520413865), 
array("nombre"=>"Cruz", "direccion"=>"A.v Luz ", "tel"=>5520141635), 
array("nombre"=>"Marco", "direccion"=>"Luz casa", "tel"=>5520454455));
print("<table border='2' cellpadding='2' callspacing='0'>");
print("<tr>");
print("<th>Número</th>");
print("<th>Nombre</th>");
print("<th>Dirección</th>");
print("<th>Teléfono</th>");
print("</tr>");
print("<tr>");
print("<td>0</td>");
print("<td>".$amigos_mixs[0]["nombre"]."</td>");
print("<td>".$amigos_mixs[0]["direccion"]."</td>");
print("<td>".$amigos_mixs[0]["tel"]."</td>");
print("</tr>");
print("<tr>");
print("<td>1</td>");
print("<td>".$amigos_mixs[1]["nombre"]."</td>");
print("<td>".$amigos_mixs[1]["direccion"]."</td>");
print("<td>".$amigos_mixs[1]["tel"]."</td>");
print("</tr>");
print("<tr>");
print("<td>2</td>");
print("<td>".$amigos_mixs[2]["nombre"]."</td>");
print("<td>".$amigos_mixs[2]["direccion"]."</td>");
print("<td>".$amigos_mixs[2]["tel"]."</td>");
print("</tr>");
print("</table>");
print("<br><br>");
/*Esta es una mescla de la matriz indexada y asociativp, ya que al declara la varible del primer array es una
matriz indexada ya que el valor de la posicion es numerico, donde la posicion 0 esta el segundo array que 
este es el asocitivo donde determinamos las varibles que le acignamos el valor*/

#----------------------Tamaño de un matriz------------------

$mi_nombre = array(1=>"Marco", "Ortega");
$persona = count($mi_nombre);
print("Número de peronas: ".$persona."<br>");
#Cout cuenta la canditda de elementos que contiene la matruiz

$mis_amigos = array(array("nombre"=>"marco","direc"=>"direc", "bre"=>"marco"));
$total = count($mis_amigos[0]);
print("Total: ".$total);
#Se determina el parametro de para poder idetificar la posicion que queremo identificar para poder la cantidad
?>