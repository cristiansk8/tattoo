<?php
$usuario = "root";
$contraseña = "";
try {
    $mbd = new PDO('mysql:host=localhost;dbname=tattotatto', $usuario, $contraseña);
    echo '<p>Artista</p><select name="artista">';
    foreach ($mbd->query('SELECT * from artista  where estado = 1')as $fila) {
        echo '
        <option value="' . $fila['nombre'] . ' ">' . $fila['nombre'] . ' </option>

  ';
    }
    echo '</select>';



    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
