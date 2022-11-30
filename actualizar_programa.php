<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['ide1'];
  $vnombreprograma=strtoupper($_POST['nombre_programa']);
  $vtipo=$_POST['Tipoprograma'];
  $miconexion=conectar_bd('', 'crud_bd');
  $resultado=consulta($miconexion, "update programa set Progra_Nombre='{$vnombreprograma}',Progra_tipo='{$vtipo}' where Progra_id='{$vide}'");
  if ($miconexion->affected_rows>0)
   {
   echo "Actualizacion exitosa";
   }
  ?>
  
  <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver al menu">