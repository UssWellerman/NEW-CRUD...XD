<!doctype html>
<html>
    <head>
        <title>Consulta de programas</title>
        <meta hhtp-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="divconsulta" class="container">
            <br>
            <div id="div2">
                <div id="div4" >
                    <form name="formulario" role="form" method="post">
                        <div class="col-md-12">
                            <strong class="lgris">Ingrese los datos de la ficha</strong>
                            <br><br>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                <input class="form-control" type="number" name="numid" min="1" max="9999999999999" autofocus value="" placeholder="Digite el numero de ficha" />
                                </div>
                            </div>
<div class="form-group col-md-3">
    <br>
    <input style="width: 40%;font-weight: bold;border-radius: 20px; background-color: rgb(0, 153, 255);color: black;" class="btn btn-primary" type="submit" value="Consultar">
    <input style="width: 40%;font-weight: bold;border-radius: 20px; background-color: rgb(0, 153, 255);color: black;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver"> 
</div>
</div>
<br>
</div>
</form>
<br>
</div>

<div id="divconsulta2">
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
    include('funciones.php');
    $miconexion=conectar_bd('', 'crud_bd');
    $vficha=$_POST['numid'];
    $resultado=consulta($miconexion,"select * from fichas where trim(ficha_numero) like '%{$vficha}%'");
    if($resultado->num_rows>0)
    {
    while ($fila = $resultado->fetch_object())
    {   
        echo $fila->ficha_numero." ".$fila->ficha_progra."<br>";
    }
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