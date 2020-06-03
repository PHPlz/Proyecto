<?php    

function createMenuDoctor(){
    $str_datos = "";
    $str_datos.='<nav class="navbar navbar-expand-lg navbar-dark bg-primary">';
    $str_datos.='<a class="navbar-brand" href="patients.php">Doctor</a>';
    $str_datos.='<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">';
    $str_datos.='<span class="navbar-toggler-icon"></span>';
    $str_datos.='  </button>';
    $str_datos.='  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">';
    $str_datos.='    <div class="navbar-nav">';
    $str_datos.='      <a class="nav-item nav-link active" href="patients.php">Pacientes <span class="sr-only">(current)</span></a>';
    $str_datos.='      <a class="nav-item nav-link active" href="rooms.php">Habitaciones</a>';
    $str_datos.='      <a class="nav-item nav-link active" style="float:rigth;" href="../login.html">Logout</a>';
    $str_datos.='    </div>';
    $str_datos.='  </div>';
    $str_datos.='  </nav>';
    echo $str_datos;
}

?> 
