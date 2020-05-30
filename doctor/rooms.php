<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

        <link href="./css/index.css" rel="stylesheet" type="text/css"  />


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
        <!-- Validation JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>       
        
        <!-- Register Form JS -->
        <script type="text/javascript" src="./js/register.js"></script>

        <title>Habitaciones</title>
    </head>
  <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
    <div class="container">
      <div class="row my-5">
          <h2 class="card-body text-center">Habitaciones</h2>
            <?php
        
                    /*include('../database/config.php');
                    $con = mysqli_connect(HOST_DB, USUARIO_DB, USUARIO_PASS, NOMBRE_DB);
                    
                    if (mysqli_connect_errno()) {
                        $str_datos.= "Error en la conexión: " . mysqli_connect_error();
                    }*/

                    $str_datos = "";
                    $str_datos.='<table class="table table-hover table-bordered">';
                    $str_datos.='<thead>';
                    $str_datos.='<tr>';
                    $str_datos.='<th>Habitación</th>';
                    $str_datos.='<th>Camas</th>';
                    $str_datos.='</tr>';
                    $str_datos.='</thead>';
                    

                    /*$str_datos.='<tr>';
                    $str_datos.= '<td> <select id="bed" class="form-control">';
                    $str_datos.= "<option selected>Seleccione</option>";
                    $str_datos.= "</select> </td>";
                    $str_datos.= "</tr>";*/
                
                    $str_datos.= "</table>";
                    echo $str_datos;
                    
                    /*mysqli_close($con);*/
                ?>
        </div>
    </div>
    <div id="patientModal">


    </div>
  </body>
</html>