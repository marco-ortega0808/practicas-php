<?php
  /*   if(isset($_GET['lang']) AND isset($_GET['coursep'])){
        $get = $_GET['lang'];

        $company = $_GET['coursep'];
        print("mi favorito lang es : $get y mi comañia $company");
    }
*/
    session_start();
    $_SESSION['usuario'] = "Marco";
    $_SESSION['age'] = 22;
    $_SESSION['coolor'] = "green";

    print ("mi nombre es: ".$_SESSION['usuario']." y me edad ".$_SESSION['age']);
    print("<br>")

?>