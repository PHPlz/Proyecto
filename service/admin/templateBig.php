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
    <div class="container">
        <div class='row'>
            <input type="button" value="Inicio" onclick="location.href='index.php'"       class="btn btn-primary">
            <input type="button" value="Habitaciones" onclick="location.href='room.php'"  class="btn btn-primary">
            <input type="button" value="Pacientes"  onclick="location.href='patient.php'"  class="btn btn-primary">
            <input type="button" value="Equipos"    onclick="location.href='equip.php'"  class="btn btn-primary">
            <input type="button" value="Recursos"   onclick="location.href='resources.php'"  class="btn btn-primary">
        </div>
        <?php echo $body; ?>
    </div>

</body>

</html>
