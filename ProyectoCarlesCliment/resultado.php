<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/resultado.css">
</head>
<body>
        <?php

            include('./include/cabecera.php');

        ?>  
    <main>
        <?php
            $nombreyapellido = $_POST['nombreyapellido'];
            $videojuego = $_POST['videojuego'];
            $plataforma = $_POST['plataforma'];
            $socio = $_POST['socio'];
            $fondo = $_POST['fondo'];
            $suscripcion = $_POST['suscripcion'];
            $valoracion = $_POST['valoracion'];
            $opinion = $_POST['opinion'];
        ?>

        <div id="nombreyapellidofinal">
            <h2>
                Nombre y Apellido: <?php print $nombreyapellido ?>
            </h2>
        </div>
        <div id="videojuegosfinal">
            <h2 id="videojuegostitulo">Videojuego: <?php print $videojuego?></h2>
                 
            <h3 id="videojuegosfoto">
            <?php

            if ($videojuego == "accion") {
                print "<h3>CALL OF DUTY BLACK OPS 2<h3>";
                print "<img src=\"./imagenes/codbo2.png\">"; 
            }

            if ($videojuego == "estrategia") {
                print "<h3>CLASH ROYALE<h3>";
                print "<img src=\"./imagenes/clashroyale.png\">"; 
            }

            if ($videojuego == "arcade") {
                print "<h3>PACMAN<h3>";
                print "<img src=\"./imagenes/pacman.png\">"; 
            }

            if ($videojuego == "deporte") {
                print "<h3>NBA 2K21<h3>";
                print "<img src=\"./imagenes/nba.png\">"; 
            }
            
            ?>
            </h3> 
        </div>
        <div id="plataformafinal">
            <h2 id="plataformatitulo">Plataforma: <?php print $plataforma?></h2>
                 
            <h3 id="plataformafoto">
            <?php

            if ($plataforma == "pc") {
                print "<img src=\"./imagenes/pcgaming.png\">"; 
            }

            if ($plataforma == "ps4") {
                print "<img src=\"./imagenes/ps4.png\">"; 
            }

            if ($plataforma == "xboxone") {
                print "<img src=\"./imagenes/xboxone.png\">"; 
            }

            if ($plataforma == "nintendoswitch") {
                print "<img src=\"./imagenes/nintendoswitch.png\">"; 
            }
            
            ?>
            </h3> 
        </div>
        <div id="sociofinal">
            <h2 id="sociotitulo">Tarjeta de Socio: <?php print $socio ?> </h2>
            <h3 id="sociofoto">
            <?php

            if ($socio == "si") {
                print "<img src=\"./imagenes/sociogame.png\">"; 
            }

            if ($socio == "no") {
                print "<img src=\"./imagenes/sociogameno.png\">"; 
            }

            if ($socio == "nolallevoencima") {
                print "<img src=\"./imagenes/sociogameno.png\">";
            }

            ?>
            </h3>
        </div>
        <div id="fondofinal">
            <?php

                if ($fondo == "negro") {
                    print "<body style=\"background-color:#000000;\">";
                }

                if ($fondo == "rojo") {
                    print "<body style=\"background-color:#ff0000;\">";
                }

                if ($fondo == "azul") {
                    print "<body style=\"background-color:#0000ff;\">";
                }
            ?>
        </div>
        <div id="suscripcionfinal">
            <h3 id="suscripcionfoto">
            <?php
                print "<img src=\"./imagenes/online.png\">";   

            ?>
            </h3>
            <h2 id="suscripciontitulo">
                <?php print $suscripcion ?>
            </h2>
        </div>  
        <div id="valoracionfinal">
            <h2 id="valoraciontitulo">Tu Valoración:</h2>
            <h3 id="valoracionfoto">
            <?php

            if ($valoracion == "0") {
                print "<img src=\"./imagenes/0estrellas.png\">"; 
            }

            if ($valoracion == "1") {
                print "<img src=\"./imagenes/1estrellas.png\">"; 
            }

            if ($valoracion == "2") {
                print "<img src=\"./imagenes/2estrellas.png\">"; 
            }

            if ($valoracion == "3") {
                print "<img src=\"./imagenes/3estrellas.png\">"; 
            }

            if ($valoracion == "4") {
                print "<img src=\"./imagenes/4estrellas.png\">"; 
            }

            if ($valoracion == "5") {
                print "<img src=\"./imagenes/5estrellas.png\">"; 
            }

            ?>
            </h3>
        </div>
        <div id="opinionfinal">
            <h2 id="opiniontitulo">Tu comentario:</h2>
            <p><?php print $opinion ?></p>
        </div>
    </main>
</body>
</html>