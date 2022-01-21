<?php
print("<br>---------------------Tabla del 6-------------------------------------<br>");


for ($i=1; $i<=10; $i++) { 
    $multi=6*$i;
    print("<br>6 * " .$i." = ".$multi);
}

print("<br>----------------Todas las tablas-------------------<br>");

for ($i=1; $i<=10; $i++) { 
    print("<br>---------tablas del $i ---------");
    for ($j=0; $j <= 10; $j++) { 
        $multi=$i*$j;
    print("<br>" .$i. "* " .$j." = ".$multi);
    }
    
}

?>