<?php
   session_start();
 ?>
   $id = _GET['iPatient'];
   $name = _GET['nPatient'];
   $priority = _GET['pPatient'];

<?php  
   $_SESSION["iPatient"] = 23;
   $_SESSION["nPatient"] = 'Pepito';
   $_SESSION["pPatient"] = 'baja';

?>

