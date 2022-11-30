<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include('funciones.php');
 $vtipoid=$_POST['tipoid'];
 $vnumid=$_POST['numid'];
 $vnombres=strtoupper($_POST['nombres']);
 $vapellidos=strtoupper($_POST['apellidos']);
 $vdireccion=strtoupper($_POST['direccion']);
 $vtelefono=$_POST['telefono'];
 $vficha=$_POST['ficha'];

 $miconexion=conectar_bd('', 'crud_bd');
 $resultado=consulta($miconexion,"insert into aprendices (Apre_tipoid,Apre_Numid,Apre_Nombres,Apre_Apellidos,Apre_Direccion,Apre_Telefono,Apre_Ficha) values ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}') ");
 if ($resultado)
 {echo "Guardado exitoso"?>
 <script> swal('Aprendiz registrado correctamente', '', 'success');</script>
 <?php
 //header('Location: registro_aprendiz.php');
 }
 ?>

<br><br>
<input style="width: 10%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
