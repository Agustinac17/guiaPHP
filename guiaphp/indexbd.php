<html>

<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GUIA PHP</title></head>

<body>
    <p>EJERCICIO 9
    <form method="post" action="captdatos.php">
        Ingrese su nombre:
        <input type="text" name="nombre">
        <br>
        <br>
        Ingrese su edad:
        <input type="number" name="edad">
        <br>
        <br>
        <input type="submit" value="confirmar">
    </form>
    <p>-----------------------------------------
    <br>   
    <br> 

    <p>EJERCICIO 10
    <form method="post" action="captdatos.php">
        Ingrese su nombre y apellido:
        <input type="text" name="valor1">
        <br>
        <input type="radio" name="radio1" value="sin_estudios">no cuenta con estudios
        <br>
        <input type="radio" name="radio1" value="primaria">cuenta con estudios primarios
        <br>
        <input type="radio" name="radio1" value="secundaria">cuenta con estudios secundarios
        <br>
    <input type="submit" name="operar">
  </form>
    <p>-----------------------------------------
    <br>   
    <br>   

    <p>EJERCICIO 11
    <form method="post" action="captdatos.php">
        Ingrese su nombre y apellido:
        <input type="text" name="nombre">
        <br>
        <input type="checkbox" name="check1" value="natacion">NATACIÓN
        <br>
        <input type="checkbox" name="check2" value="hockey">HOCKEY
        <br>
        <input type="checkbox" name="check3" value="atletismo">ATLETISMO
        <br>
        <input type="checkbox" name="check4" value="furbol">FUTBOL
    <input type="submit" name="CONFIRMAR">
  </form>
    <p>-----------------------------------------
    <br>   
    <br>  

    <p>EJERCICIO 12
    <form method="post" action="captdatos.php">
        Ingrese su nombre y apellido:
        <input type="text" name="nombre">
        <br>
        Seleccione la opción que se adapte a sus ingresos mensuales
        <select name="ingresos_persona">
            <option value="1">entre 1-1000</option>
            <option value="2">entre 1001-3000</option>
            <option value="3">mayor a 3000</option>
        </select>
    <input type="submit" name="CONFIRMAR">
  </form>
    <p>-----------------------------------------
    <br>   
    <br>  

    <p>EJERCICIO 13
    <!--<form method="post" action="captdatos.php">
    </form>-->
    <p>-----------------------------------------
    <br>   
    <br>  

    <?php 
    //EJEMPLO
    //echo "Hola Mundo"; 

    //EJERCICIO CUATRO//
    echo "EJERCICIO CUATRO","<br>";
    
    $num=rand(1,100);
    if ($num <= 50) {
        echo "NUMERO MENOR A 50: ", $num;
    } else {
        echo "NUMERO MAYOR A 50: ", $num;
    }
    
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";

    //EJERCICIO CINCO//
    echo "EJERCICIO CINCO","<br>";
    $edad = 24; //Se declara una variable de tipo integer.
    $sueldo = 758.43; //Se declara una variable de tipo double.
    $nombre_apellido= "Juan Suarez"; //Se declara una variable de tipo string.
    $vivo = true; //Se declara una variable boolean.
    echo "Variable entera - EDAD: ";
    echo $edad;
    echo "<br>";
    echo "Variable double - SUELDO: ";
    echo $sueldo;
    echo "<br>";
    echo "Variable string - NOMBRE Y APELLIDO: ";
    echo $nombre_apellido;
    echo "<br>";
    echo "Variable boolean - ESTA VIVO O EN EL CIELO: ";
    echo $vivo;
    
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO SEIS//
    echo "EJERCICIO SEIS","<br>";
    $fecha_patria = 9;
    $mes = 7;
    $hora_exacta= 12;
    $nro_invitacion=3;
    echo "Su invitacion es la nro $nro_invitacion. Lo invitamos el día $fecha_patria / $mes a las $hora_exacta a comer pastelitos";

    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO SIETE//
    echo "EJERCICIO SIETE","<br>";

    $num=rand(1,3);
    if ($num == 3) {
        echo "NUMERO: TRES";
    }
    elseif ($num == 2)
    {
        echo "NUMERO: DOS";
    }
    else
    {
        echo "NUMERO: UNO";
    }

    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO OCHO//
    echo "EJERCICIO OCHO","<br>";

    //EJEMPLO
    //echo "Tabla de Multiplar del 2 For";
    //echo "<ul>";
    //$resultado = 0;
    //for($i =1; $i <=10;$i++){
        // $resultado = 2 * $i;
        //echo "<li> 2 x $i = $resultado</li>";
    //}
    //echo "</ul";
    //echo "<br><hr>";

    echo "FOR","<br>";
    for ($f = 0; $f <= 20; $f= $f+2) {
        echo $f;
        echo "<br>";
    }

    echo "WHILE","<br>";
    $inicio = 0;
    while ($inicio <= 20) {
      echo $inicio;
      echo "<br>";
      $inicio = $inicio+2;
    }

    echo "DO/WHILE","<br>";
    $inicio = 0;
    do 
    {
        $inicio = $inicio+2;
        echo $inicio;
        echo "<br>";
    } while ($inicio < 20);

    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO NUEVE//
    echo "EJERCICIO NUEVE","<br>";
    echo "ESTA AL COMIENZO DEL HTML";
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO DIEZ//
    echo "EJERCICIO DIEZ","<br>";
    echo "ESTA AL COMIENZO DEL HTML";
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO ONCE//
    echo "EJERCICIO ONCE","<br>";
    echo "ESTA AL COMIENZO DEL HTML";
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO 12//
    echo "EJERCICIO 12","<br>";
    echo "ESTA AL COMIENZO DEL HTML";
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO 13//
    echo "EJERCICIO 13","<br>";
    echo "ESTA AL COMIENZO DEL HTML";
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO 14//
    echo "EJERCICIO 14","<br>";
    $diaSemana[] = "Lunes";
    $diaSemana[] = "Martes";
    $diaSemana[] = "Miércoles";
    $diaSemana[] = "Jueves";
    $diaSemana[] = "Viernes";
    $diaSemana[] = "Sábado";
    $diaSemana[] = "Domingo";
    echo "Primer dia de la semana: " . $diaSemana[0];
    echo "<br>";
    echo "Domingo d resurrección: " . $diaSemana[6];
    
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO 15//
    echo "EJERCICIO 15","<br>";
    
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO 16//
    echo "EJERCICIO 16","<br>";
    
    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";
    
    //EJERCICIO 17//
    echo "EJERCICIO 17","<br>";


    echo "<br>";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    echo "<br>";    


    //EJERCICIO 18//
    echo "EJERCICIO 18";
    


    ?>
</body>

</html>