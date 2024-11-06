<?php
include('conexion.php');
conectar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GUIA PHP CÁCERES ERIKA</title>

    <!-- Enlaces a hojas de estilo CSS -->
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <!-- Barra de navegación o menú -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">GUIA PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li><a href="index.php" style="color:black;">Inicio</a></li>
                    <?php
                    $sql = "SELECT *FROM menu ORDER BY nombre_item";//armo la cadena SQL
                    $sql = mysqli_query($con, $sql);//ejecuto la consulta
                        if(mysqli_num_rows($sql) != 0)//pregunto si tiene datos
                        {
                            while ($r = mysqli_fetch_array($sql))//recorro todos los registros
                            {
                                ?>
                                <li><a href="index.php?modulo=<?php echo $r['nombre_modulo']?>" style="color:black;"><?php echo $r['nombre_item']?></a></li>
                                <?php
                            }
                        }
                    ?>
            </ul>
        </div>
    </nav>

    <?php
        if(isset($_GET['modulo']))
        {
            include ('modulos/'.$_GET['modulo'].'.php');
        }
        else
        {
            ?>
            <h1>EJERCICIOS REALIZADOS</h1>
            <p>Resolución</p>
            <?php
        }
    ?>
 

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">© guia muy dificil</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
