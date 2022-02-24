<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<form action="./resultado.php" method="post">
<body>
    <?php

        include('./include/cabecera.php');

    ?>
    <main>
        <p>Esto es una línea de prueba</p>
        <label for="nombreyapellido">Nombre y Apellidos:</label>
        <input type="text" name="nombreyapellido" id="nombreyapellido">
        <br>
        <label for="videojuego" id="labelvideojuego">¿Que tipo de Videojuego quieres comprar?</label>
        <br>
        <input type="radio" value="accion" name="videojuego" id="accion" required> Acción
        <br>
        <input type="radio" value="estrategia" name="videojuego" id="estrategia"> Estrategia
        <br>
        <input type="radio" value="arcade" name="videojuego" id="arcade"> Arcade
        <br>
        <input type="radio" value="deporte" name="deporte" id="deporte"> Deporte
        <br>
        <label for="plataforma">¿En que plataforma vas a jugarlo?</label>
        <select name="plataforma" id="plataforma">
            <option value="pc" name="pc">Pc</option>
            <option value="xboxone" name="xboxone">Xbox One</option>
            <option value="ps4" name="ps4">Ps4</option>
            <option value="nintendoswitch" name="nintendoswitch">Nintendo Switch</option>
        </select>
        <br>
        <label for="socio">¿Tienes tarjeta de socio de GAME?</label>
        <select name="socio" id="socio">
            <option value="si" name="si">Si</option>
            <option value="no" name="no">No</option>
            <option value="nolallevoencima">No la llevo encima</option>
        </select>
        <br>
        <label for="fondo">¿Que tipo de fondo te gustaría tener en tu consola?</label>
        <br>
        <input type="radio" value="negro" name="fondo" id="negro" required> Negro 
        <br>
        <input type="radio" value="rojo" name="fondo" id="rojo"> Rojo
        <br>
        <input type="radio" value="azul" name="fondo" id="azul"> Azul
        <br>
        <label for="suscripcion">¿Cuántos meses de suscripción quieres para poder jugar online</label>
        <input type="number" name="suscripcion" id="suscripcion" max="12" min="1">
        <br>
        <label for="valoracion">Porfavor, valore nuestra atención al cliente del 1 al 5</label>
        <input type="number" name="valoracion" id="valoracion" max="5" min="0">
        <br>
        <label for="opinion">Deja aquí tu opinión o duda</label>
        <input type="textarea" id="opinion" name="opinion">
        <br>
        <input type="submit" value="Enviar" name="enviar" id="enviar">
        <input type="reset" value="Borrar" name="borrar" id="borrar">
    </main> 
</body>
</form>
</html>