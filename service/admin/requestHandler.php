<?php
include_once '../../DBStuff/dbAdminSv.php';

function crearBody($body,$aprobado, $recurso, $paciente, $medico)
{
  $body = "Buenas tardes $medico \nSu solicitud de $recurso para el paciente $paciente fue: ";

  if($aprobado==1){
    $body.="APROBADA \n";
    $body.= "Puede hacer uso de los recursos asignados en breve";
  }
  else {
    $body.="RECHAZADA\n";
    $body.= "Lamentamos los inconvenientes, no hay recursos disponibles o hay pacientes con mayor prioridad";
  }
  return $body;

}
function enviarCorreo(){
  $to_email = $_POST["destino"];
  $subject = "Notificacion de su solicitud";
  $body = "";
  $medico = $_POST["medic"];
  //$aprobado = $_POST["estado"]==1;

  $body = crearBody($body, $_POST["estado"], $_POST["recurso"], $_POST["paciente"], $_POST["medico"]);
  $resultado = AdminSv::processRequest($_POST["idSol"],$_POST["estado"]);

  $headers = "From: phplz.fmail@gmail.com";
  $seEnvio= mail($to_email, $subject, $body, $headers);
  echo $seEnvio;
  if ($seEnvio==1) {
    echo "Su respuesta a la peticion fue enviada al correo $to_email";
  }
  else {
    echo "Error en el envio. Intente mas tarde";
  }


}


enviarCorreo();
//$resultado = AdminSv::processRequest(6,0);
//header("refresh:0; url: 'index.php'");
