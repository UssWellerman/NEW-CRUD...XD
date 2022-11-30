<?php
  include('funciones.php');
  session_start();
  $vficha=$_POST['ide'];
  $vtipo=$_POST['nombre_programa'];
  $miconexion=conectar_bd('', 'crud_bd');
  $resultado=consulta($miconexion, "update fichas set ficha_numero='{$vficha}',ficha_progra='{$vtipo}'");
  if ($miconexion->affected_rows>0)
   {
   echo "Actualizacion exitosa";
   }
  ?>
  
  <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver al menu">