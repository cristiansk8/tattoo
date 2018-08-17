<?php

require("Database.php");


if ($_FILES["fotoart"]['size']>2000000) {
  echo "archivodemasiado pesado";

}

$dir="imagenes/";
$nombre_archivo=$_FILES["fotoart"]['name'];
if (!move_uploaded_file($_FILES["fotoart"]["tmp_name"],$dir.$nombre_archivo)) {
  echo "error subida de archivo";
  include 'artista.php';
}

$fecha= date("Y-m-d H:i:s");
if (isset($_POST['enviarCliente'])) {
    $query = "INSERT INTO cliente (nombre, cedula, correo, celular, eps, artista, zona, tatuaje, precio, fecha) VALUES ( :nombre, :cedula, :correo, :celular, :eps, :artista, :zona, :tatuaje, :precio, :fecha)";
    $query_params = array(
    ':nombre' => $_POST['nombre'],
    ':cedula' => $_POST['cedula'],
    ':correo' => $_POST['correo'],
    ':celular' => $_POST['celular'],
    ':eps' => $_POST['eps'],
    ':artista' => $_POST['artista'],
    ':zona' => $_POST['zona'],
    ':tatuaje' => $_POST['tatuaje'],
    ':precio' => $_POST['precio'],
    ':fecha' => $fecha

    );


    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {
        $response["message"] = "Error base de datos. Por favor vuelve a intentarlo";
        die(json_encode($response));
    }
    header('Location:index.php');

}
if (isset($_POST['enviarArtista'])) {
    $query = "INSERT INTO artista (nombre, cedula, correo, celular, eps, direccion, estado, foto) VALUES ( :nombreA, :cedulaA, :correoA, :celularA, :epsA,:direccionA, :estado, :foto)";
    $query_params = array(
    ':nombreA' => $_POST['nombreart'],
    ':cedulaA' => $_POST['cedulaart'],
    ':correoA' => $_POST['correoart'],
    ':celularA' => $_POST['celularart'],
    ':epsA' => $_POST['epsart'],
    ':direccionA' => $_POST['direccionart'],
    ':estado' => 1,
    ':foto' => $nombre_archivo

    );


    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {
        $response["message"] = "Error base de datos. Por favor vuelve a intentarlo";
        die(json_encode($response));
    }
    header('Location:artista.php');

}

$consulta=mysql_query("SELECT*FORM cliente");
echo "
<table>
   <tr>
      <th>nombre</th>
      <th>cedula</th>
      <th>artista</th>
      <th>precio</th>
  </tr>

";
while ($registro = mysql_fetch_array($consulta)) {
echo "
<tr>
   <td>.$registro["nombre"]</td>
    <td>.$registro["cedula"]</td>
    <td>.$registro["artista"]</td>
    <td>.$registro["precio"]</td>
</tr>
";
}
echo "<table>";
