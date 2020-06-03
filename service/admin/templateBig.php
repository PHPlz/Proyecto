<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Validation JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

    <!--<script type="text/javascript" src="../../view/js/admin.js"></script>-->


    <!-- Extra scripts -->
    <?php echo $scripts ?>


    <title><?php echo $pageTitle ?></title>
</head>


<body>

    <?php
      $str_datos = "";
      $str_datos.='<nav class="navbar navbar-expand-lg navbar-dark bg-primary">';
      $str_datos.='<a class="navbar-brand" href="index.php">Administrador</a>';
      $str_datos.='<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">';
      $str_datos.='<span class="navbar-toggler-icon"></span>';
      $str_datos.='  </button>';
      $str_datos.='  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">';
      $str_datos.='    <div class="navbar-nav">';
      $str_datos.='      <a class="nav-item nav-link active" href="patient.php">Pacientes <span class="sr-only">(current)</span></a>';
      $str_datos.='      <a class="nav-item nav-link active" href="room.php">Habitaciones</a>';
      $str_datos.='      <a class="nav-item nav-link active" href="equip.php">Equipos</a>';
      $str_datos.='      <a class="nav-item nav-link active" href="resource.php">Recursos</a>';
      $str_datos.='      <a class="nav-item nav-link active" style="float:rigth;" href="../../view/login.html">Logout</a>';
      $str_datos.='    </div>';
      $str_datos.='  </div>';
      $str_datos.='  </nav>';
      echo $str_datos;
    ?>
    <br>
    <br>
            <input type="button" value="Reset DB"   onclick="location.href='admReqHandler.php?type=set-db'"  class="btn btn-primary">
            <input type="button" value="Agregar Administrador"   onclick="location.href='resource.php'"  class="btn btn-primary">
        <?php echo $body; ?>


</body>

</html>
