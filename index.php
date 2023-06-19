<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplos (PHP)</title>
    </head>

    <body>

        <!-- Estos scrip con etiquetas adentro muestra que html interpreta el contenido de php con sus etiquetas y detalles -->
        <?php  echo "<h6>Script en PHP</h6>"?>
        <?php  echo "<h1>Script en PHP</h1>"?>
        <?php  echo "<p>Script en PHP</p>"?>


        <!--  <?php phpinfo(); ?> Ejemplo 3 comando para mostrar toda la información de php que tienes instalado -->
        
        
        <!-- $_SERVER es una variable global asi que es unica de PHP y tomar en cuenta que todas las variables en PHP empiezan en $ -->
        <?php  echo $_SERVER['HTTP_USER_AGENT']?>

        <?php
        
        //  strpos(). strpos() es una función integrada en PHP que busca un string dentro de otro. En este caso estamos buscando 'MSIE', Tambien llamdo aguja
            if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE){
            echo 'Está usando Internet Explore.<br />';
            }
        ?>


        <!-- Ejeplo 4, Controladores y sentencias utilizando variables globales y Estilando un arry, Mostramos el mensaje dependiendo del resultado de la sentancia -->
        <?php
            if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE){        
        ?>

            <h3>Strops() debe haber devuelto no falso</h3>
            <p>Está usando internet Explore</p>

        <?php 
        }else{
        ?> 

            <h3>Strops() Debe haber devuelto falso</h3>
            <p>No está Usando Internet Explore</p>

        <?php
        }
        ?>


        <!-- Formularios en PHP, se envia por el metodo POST a la pagina accion.php una vez se haya echo clik al input type_ Submit -->
        <form action="accion.php" method="post">

            <p>Su nombre: <input type="text" name="nombre"></p>
            <p>Su edad: <input type="text" name="edad"></p>
            <p><input type="submit"></p>

        </form>











    </body>

</html>