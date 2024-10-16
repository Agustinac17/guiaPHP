<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>
  <?php
   //EJERCICIO NUEVE//
   echo "EJERCICIO NUEVE","<br>";
   /*echo $_POST['nombre'];
   echo "<br>";
   if ($_POST['edad'] >= 18) {
     echo "Es mayor de edad";
   } else {
     echo "No es mayor de edad";
   }*/

   echo "<br>";
   echo "<br>";
   echo "---------------------------------";
   echo "<br>";
   echo "<br>";
   
   //EJERCICIO DIEZ//
   echo "EJERCICIO DIEZ","<br>";
    /*if ($_POST['radio1'] == "sin_estudios") {
    echo "El usuario  ".$_POST['valor1'] ." no cuenta con estudios primarios ni secundarios";
    } 
    elseif ($_POST['radio1'] == "primaria"){
    echo "El usuario  ".$_POST['valor1'] ." cuenta con estudios primarios";
    } 
    else {
    echo "El usuario  ".$_POST['valor1'] ." cuenta con estudios secundarios";
    }*/
   echo "<br>";
   echo "<br>";
   echo "---------------------------------";
   echo "<br>";
   echo "<br>";
    
   //EJERCICIO ONCE//
    echo "EJERCICIO ONCE","<br>";
    $deportes = 0;
    if (isset($_POST['check1'])) {
      $deportes++;
    }
    if (isset($_POST['check2'])) {
      $deportes++;
    }
    if (isset($_POST['check3'])) {
      $deportes++;
    }
    if (isset($_POST['check4'])) {
      $deportes++;
    }
    echo $_POST['nombre'];
    echo " practica $deportes deportes.";
    
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";

    //EJERCICIO 12//
    echo "EJERCICIO 12","<br>";
    if ($_POST['ingresos_persona'] == "3") {
        echo $_POST['nombre'] ." debe pagar impuestos :C";
      } 
    else {
        echo $_POST['nombre'] ." no debe pagar impuestos :)";
    }
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO 13//
    echo "EJERCICIO 13","<br>";
    
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";

  ?>

</body>

</html>