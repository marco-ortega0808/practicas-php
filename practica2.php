<?php
print("<br>---------------------Mostrar edad mayor-------------------------------------<br><br>");


$edad_uno =12;
$edad_dos =5;
print("La primera persona tiene una edad de: ".$edad_uno ."<br>");
print("La segunda persona tiene una edad de: ".$edad_dos. "<br> ¿Cuál de las dos personas es más grande?");
if($edad_dos < $edad_uno){
    print("<br>La primera persona es mayor: ".$edad_uno);
}else {
    print("<br>La segunda persona es mayor: ".$edad_dos);
}
?>