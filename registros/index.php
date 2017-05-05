<?php
  session_start();
  if ($_SESSION['result']=="success") {
    header('Location: http://localhost:8000/controller/export.php');
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#000"/>
  <title>Qincha | Suscripciones</title>
  <link rel="shorcut icon" href="assets/media/ico.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">
</head>
<body>

  <section id="logReport">
    <div class="container h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-12 col-md-7 col-lg-5 p-4">
          <div class="card text-center" id="card-log">
            <div class="card-header">
              <!--<img class="img-fluid" src="../assets/media/ico.png" alt="">-->
              Benjamin Grosvenor | Registros
            </div>
            <div class="card-block">
              <form class="" action="../controller/authenticate.php" method="post">
                <?php
                  $result = $_SESSION['result'];
                  if ($result == "pass") {
                    $msg = "Contraseña errónea, inténtalo nuevamente.";
                    $classgroup = 'has-danger';
                    $class = 'form-control-danger';
                  }
                  if ($result == "user") {
                    $msg = "Usuario administrador no existe!";
                    $classgroup = 'has-danger';
                    $class = 'form-control-danger';
                  }
                  if ($result =="success") {
                    $msg = "Descarga completa satisfactoriamente!";
                    $classgroup = 'has-success';
                    $class = 'form-control-danger';
                  }
               ?>
                <div class="form-group  <?php echo $classgroup ?>">
                  <label class="textual-2">Ingresa los datos para descargar los registros</label>
                  <input type="text" class="input-qincha form-control <?php echo $class ?>" required="" name="user" autofocus="" placeholder="usuario">
                </div>
                <div class="form-group  <?php echo $classgroup ?>">
                  <input type="password" class="input-qincha form-control <?php echo $class ?>" required="" name="password" placeholder="contraseña">
                  <div class="form-control-feedback">
                    <?php echo $msg ?>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-danger" name="button">Descargar</button>
                </div>
              </form>
            </div>
            <div class="card-footer text-muted" id="current-date">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php session_destroy() ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="../assets/js/app.js" charset="utf-8"></script>
</body>
</html>
