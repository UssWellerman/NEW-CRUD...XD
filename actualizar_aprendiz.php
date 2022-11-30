<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['ide1'];
  $vnombres=strtoupper($_POST['nombres']);
  $vapellidos=strtoupper($_POST['apellidos']);
  $vdireccion=strtoupper($_POST['direccion']);
  $vtelefono=$_POST['telefono'];

  $miconexion=conectar_bd('', 'crud_bd');
  $resultado=consulta($miconexion, "update aprendices set Apre_Nombres='{$vnombres}',Apre_Apellidos='{$vapellidos}',Apre_Direccion='{$vdireccion}',Apre_Telefono='{$vtelefono}' where Apre_id='{$vide}'");
  if ($miconexion->affected_rows>0)
   {
   echo "Actualizacion exitosa";
   }
  ?>
  
  <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver al menu">