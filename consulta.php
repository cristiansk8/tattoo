<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <title></title>
  </head>

<script type="text/javascript">
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<header>
  Tatto
</header>
<body>
  <div class="">
    <?php
        $usuario = "root";
        $contraseña = "";
        try {
            $mbd = new PDO('mysql:host=localhost;dbname=tattotatto', $usuario, $contraseña);
            echo '<p>Artista</p>
<form>
            <select name="artista" onchange="showUser(this.value)">';
            foreach ($mbd->query('SELECT * from artista  where estado = 1')as $fila) {
                echo '
                <option value="' . $fila['nombre'] . ' ">' . $fila['nombre'] . ' </option>

          ';
            }
            echo '</select>
</form>
            ';



            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        ?>
  </div>

<div class="txtHint">
  <table>
  <tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Age</th>
  <th>Hometown</th>
  <th>Job</th>
  </tr>

    <tr>
    <td></td>
      <td></td>
        <td></td>
          <td></td>
            <td></td>

    </tr>

  </table>
</div>

</body>


        <footer>

        </footer>
      </html>
