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
    /*$deportes = 0;
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
    echo " practica $deportes deportes.";*/
    
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";

    //EJERCICIO 12//
    echo "EJERCICIO 12","<br>";
    /*if ($_POST['ingresos_persona'] == "3") {
        echo $_POST['nombre'] ." debe pagar impuestos :C";
      } 
    else {
        echo $_POST['nombre'] ." no debe pagar impuestos :)";
    }*/
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO 13//
    echo "EJERCICIO 13","<br>";
    //echo $_POST['contrato'];
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";

    //EJERCICIO 15//
    echo "EJERCICIO 15","<br>";
    /*$ar = fopen("pizza40.txt", "a") or
    die("Problemas en la creacion");
    fputs($ar, "Nombre:");
    fputs($ar, $_POST['nombre']);
    fputs($ar, "\n");
    fputs($ar, "Dirección:");
    fputs($ar, $_POST['direccion']);
    fputs($ar, "\n");
    if (isset($_POST['jamonqueso'])) {
      fputs($ar, "Cantidad de Jamón y Queso:");
      fputs($ar, $_POST['cantjamonqueso']);
      fputs($ar, "\n");
    }
    if (isset($_POST['napolitana'])) {
      fputs($ar, "Cantidad de Napolitana:");
      fputs($ar, $_POST['cantnapolitana']);
      fputs($ar, "\n");
    }
    if (isset($_POST['muzzarella'])) {
      fputs($ar, "Cantidad de Muzzarella:");
      fputs($ar, $_POST['cantmuzzarella']);
      fputs($ar, "\n");
    }

    fputs($ar, "\n");
    fclose($ar);
    echo "El pedido se cargó correctamente.";*/
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>"; 

    //EJERCICIO 16//
    echo "EJERCICIO 16","<br>";
    /*$ar = fopen("pizza40.txt", "r") or
        die("No se pudo abrir el archivo");
    while (!feof($ar)) {
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
    }
    fclose($ar);*/
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";  

    //EJERCICIO 18//
    function verificarClaves($cla1, $cla2)
    {
      if ($cla1 != $cla2)
        echo "Las claves ingresadas son distintas";
    }

    verificarClaves($_POST['clave1'], $_POST['clave2']);
    echo "<br>";
    echo "Se verificaron las claves ingresadas";
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";  

  ?>

</body>

</html>