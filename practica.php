<?php
print("-------------------Días de las semana---------------------------------------<br>");

$dias_s = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");
print("<table border='1' cellpadding='1'><tr>");
print_r("Días de la semana:<th> ".$dias_s[0]."</th><th>". $dias_s[1]."</th> <th>".$dias_s[2]."</th><th>". $dias_s[3]."</th> <th>$dias_s[4]</th>");
print("</tr></table><br>");
print("El dia de hoy es: ".$dias_s[3]);


?>
