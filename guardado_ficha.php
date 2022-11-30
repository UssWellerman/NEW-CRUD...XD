<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include('funciones.php');
 $vfichanum=$_POST['numid'];
 $vprogra_nombre=strtoupper($_POST['programa']);
 $miconexion=conectar_bd('', 'crud_bd');
 $resultado=consulta($miconexion,"insert into fichas (ficha_numero,ficha_progra) values ('{$vfichanum}','{$vprogra_nombre}') ");
 if ($resultado)
 {echo "Guardado exitoso"?>
 <script> swal('Aprendiz registrado correctamente', '', 'success');</script>
 <?php
 //header('Location: registro_aprendiz.php');
 }
 ?>

<br><br>
<input style="width: 10%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
