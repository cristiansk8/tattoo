<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <header>
    Tatto tatto
  </header>
  <body>
  <div class="container">
    <form class="" method="POST" action="control.php">
    <p> Ingresar cliente</p>
      <div class="">
      <p>Nombre</p> <input type="text" name="nombre" value="">
      </div>
      <div class="">
    <p>cedula</p> <input type="text" name="cedula" value="">
      </div>
      <div class="">
      <p>correo</p><input type="email" name="correo" value="">
      </div>
      <div class="">
    <p>celular</p><input type="text" name="celular" value="">
      </div>
      <div class="">
      <p>eps</p> <input type="text" name="eps" value="">
      </div>
      <div class="">
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
      </div>
      <div class="">
        <p>zona</p>
        <input type="text" name="zona" value="">
      </div>
      <div class="">
        <p>tatuaje</p>
        <textarea name="tatuaje" rows="8" cols="80"></textarea>
      </div>
      <div class="">
        <p>precio</p>
        <input type="text" name="precio" value="">
      </div>
<div class="">
  <input class="btn btn-success" type="submit" name="enviarCliente" id="submit" value="enviar" type="checkbox" />
</div>





    </form>
  </div>
  </body>
  <footer>

  </footer>
</html>
