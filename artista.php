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
    <script type="text/javascript">
      $(document).ready (function(){

        $('#estado').hide();
      });

    </script>


  </header>
  <body>
    <form class="" method="POST"  enctype="multipart/form-data" action="control.php">
      <div class="container">
          <p> Ingresar artista</p>
        <div class="">
            <p>nombre</p>  <input type="text" name="nombreart" value="">
        </div>
        <div class="">
          <p>cedula</p> <input type="text" name="cedulaart" value="">
        </div>
        <div class="">
          <p>correo</p><input type="email" name="correoart" value="">
        </div>
        <div class="">
          <p>celular</p> <input type="text" name="celularart" value="">
        </div>
        <div class="">
          <p>eps</p><input type="text" name="epsart" value="">
        </div>
        <div class="">
          <p>direccion</p><input type="text" name="direccionart" value="">
        </div>
        <input type="text" id="estado" name="estado" value="1">
        <div class="">
          <p>foto</p> <input type="file" name="fotoart" value="">
        </div>
        <div class="">
                <input class="btn btn-success" type="submit" name="enviarArtista" id="submit" value="enviar" type="checkbox" />
            </div>
      </div>
    </form>




  </body>
  <footer>
  </footer>
</html>
