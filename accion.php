Hola <?php echo htmlspecialchars($_POST['nombre']);?>

Usted tiene <?php echo (int)$_POST['edad'];?> Años.

<!-- Modulo para mostrar el form que se envio a esta direccion en formato POST, Recordad que $_POST es una variable global -->