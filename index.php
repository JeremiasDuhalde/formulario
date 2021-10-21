<!DOCTYPE html>
<html>
<head>
    <title>formulario</title>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type="text/css" href="css/estilo.css">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Formulario</div>
            <div class="panel-body">

                <form action="php/guardar.php" method="post">
               
		  <div class="col-md-4">
                        <div class="form-group">
                            <label> Nombre (*)</label>
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        	</div></div>

  		  <div class="col-md-4">
                        <div class="form-group">
                            <label>Apellido (*)</label>
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                     	   	</div></div>

                 <div class="col-md-4">
                        <div class="form-group">
                            <label>Username (*)</label>
                            <input type="email" class="form-control" placeholder="example@example.com" name="username">
                       		 </div></div>
				
 		 <div class="col-md-4">
    			 <div class="form-group">
                            <label>Contraseña (*)</label>
                            <input type="text" class="form-control" placeholder="*******" name="password">
                        	</div></div>
		<div class="col-md-6">
                  	 <div class="form-group">
                            <label>Provincia (*)</label>
                            <input type="number" class="form-control" placeholder="..." name="telefono">
                        </div></div>
                  	<div class="col-md-6">
               		  <div class="form-group">
                            <label>Opciones</label><br>
              
                                <input type="checkbox" value="Terminos" name="opcion[]"/>Acepta terminos y condiciones<br>
              
                            </div></div>
                    
	<div class="col-md-11">
                        <div class="form-group">
                            <label for="fecha">fecha/hora</label>
                            <input type="datetime-local"  class="form-control" id="fecha" name="fecha" value="fecha">
                        </div>   </div>
                        <input class="btn btn-primary btn-block" type="submit" value="enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--
<div class="form">
    <form action="php/guardar.php" method="POST">
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" id="nombre" name="nombre" placeholder="nombre">

        <label for="apellido">Apellido</label>
        <br>
        <input type="text" id="apellido" name="apellido" placeholder="apellido">

        <label for="usuario">Usuario</label>
        <br>
        <input type="email" id="usuario" name="usuario" placeholder="example@example.com">
  
        <label for="password">Contraseña</label>
        <br>
        <input type="text" id="password" name="password" placeholder="password">
        <br>

        <label for="opciones">opciones</label>
        <br>
        <td>
            <input type="checkbox" value="Terminos" name="opcion[]"/>Terminos
            <br>
        </td>
        <br>

        <label for="fecha">fecha/hora</label>
        <div>
            <input type="datetime-local" id="fecha" name="fecha" value="fecha">
        </div>
        <br>


        <input type="submit" value="enviar">

    </form>
</div>-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>