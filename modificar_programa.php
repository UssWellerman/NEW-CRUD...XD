<!doctype html>
<html>
    <head>
      <title>Modificar Programa</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="css/estilos.css" rel="stylesheet"/>
    </head>
<body>
    <div id="divconsulta" class="container">
    <br>
    <div id="div2">
        <div id="div4" >
            <form name="formulario" role="form" method="post">
            <div class="col-md-12">
                <strong class="lgris">Ingrese los datos del programa</strong>
                <br> <br>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre" min="1" max="9999999999999" autofocus value="" placeholder="Digite el nombre del programa" />
    </div>
<div class="form-group col-md-3">
    <br>
    <input style="width: 40%;" class="btn btn-primary" type="submit" value="Consultar" >
    <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
    
</div>
</div>
<br>
</div>
</form>
<br>
</div>
<div id="divconsulta2">
    <?php
    if ($_SERVER['REQUEST_METHOD']==='POST')
    {
    include('funciones.php');
    session_start();
    $vnumid=$_POST['nombre'];
    $miconexion=conectar_bd('', 'crud_bd');
    $resultado=consulta($miconexion,"select * from programa where Progra_Nombre='{$vnumid}'");
    if($resultado->num_rows>0)
    { 
    $fila = $resultado->fetch_object(); 
    $_SESSION['ide1']=$fila->Progra_Nombre;
    ?>
    <form id="formulario2" role="form" method="post"action="actualizar_programa.php">
        <div class="col-md-12">
            <strong class="lgris">Datos del Programa</strong><br>
            <label class="lgris">Id:</label>
            <input class="form-control" type="text" name="ide" disabled="disabled" value="<?php echo $fila->Progra_id ?>"/>
            <label class="lgris">Nombre del programa:</label>
            <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre_programa" required value="<?php echo $fila->Progra_Nombre ?>"/>
            <label class="lgris">Tipo de programa:</label>
            <select class="form-control" name="Tipoprograma">
                <option value="6" selected>Presencial</option>
                <option value="7">Virtual</option>
                <option value="8">Mixta</option>
            </select>
            <br>
            <input style="width: 40%;" class="btn btn-primary" type="submit" value="Actualizar" >
            <br><br>
        </div>
    </form>
    <?php
    } 
    else{
        echo "No existen registros";
    }
    $miconexion->close();
    }?>
    </div>
</div>
</div> 
</body>
</html>