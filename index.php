<!doctype html>
<html>
    <head>
        <title>Iniciar</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body>

        
        <div id="div1" class="container">
            <br>
            <div id="div2">
                <div id="div3">
                    <form id="formulario" method="post" action="menu.php">
                        <br>
                        <strong class="lgris">INGRESE SU USUARIO Y CONTRASEÑA PARA INICIAR SESIÓN</strong>
                        <br>
                        <br>
                        <label class="lgris">Nombre de Usuario:</label>
                        <br>
                        <input class="imput" style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                        <br>
                        <label class="lgris">Contraseña:</label>
                        <br>
                        <input class="imput" type="password" name="clave" value="" required/>
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="Iniciar sesión" >
                        <br><br>
                    </form>
                </div>
            </div> 
        </div> 
        <br><br>
       
    </body>
</html>