<!doctype html>
<html>
    <head>
        <title>Crear Programa</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet"/>
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2">
                <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?>
                    <img style="width:240px; height:240px;" src="https://i2.wp.com/esferacreativa.com/wp-content/uploads/2020/01/crear-iconos-online-MadridNYC.png?fit=1024%2C512&ssl=1"> <?php } ?>
                    <div id="div3" >
                        
<?php
 if($_SESSION['Tipo_usuario']=='Administrador')
 { 
 ?>
 <form id="formulario" role="form" method="post" action="guardado_programa.php">
     <div class="col-md-12">
         <strong class="lgris">Ingrese los datos del programa</strong>
         <br>
         <label class="lgris">Programa de formación:</label>
         <div class="form-row">
             <div class="form-group col-xs-2">
                 <select class="form-control" name="Programa">
                     <option value="ADSI" selected>ADSI</option>
                     <option value="GANADERIA">Ganaderia</option>
                     <option value="MECANICA">Mecanica</option>
                     <option value="ENFERMERIA">Enfermeria</option>
                    </select>
                </div>
            </div>
            <label class="lgris">Tipo de programa:</label>
            <div class="form-row">
             <div class="form-group col-xs-2">
                 <select class="form-control" name="Tipoprograma">
                     <option value="6" selected>Presencial</option>
                     <option value="7">Virtual</option>
                     <option value="8">Mixta</option>
                    </select>
                </div>
            </div>
            <br><br>
            <input style="width: 20%;" class="btn btn-primary" type="submit" value="Guardar" >
            <input style="width: 20%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
        </div>
    </form>
    <?php
    }
    else
    {
    echo "No tiene permisos para realizar esta acción";
    }
    ?>
    <br>
</div>
</div>
</div>
</body>
</html>