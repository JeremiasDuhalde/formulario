<!DOCTYPE html>
<html>

<head>
    <title>formulario</title>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type="text/css" href="css/estilo.css">-->
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario</div>
                    <div class="panel-body">
                        <form action="php/guardar.php" method="post">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Nombre (*)</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                    <div class="nombre">
                                        <span class="text-danger" hidden></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Apellido (*)</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" required>
                                    <div class="apellido">
                                        <span class="text-danger" hidden></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Username (*)</label>
                                    <input type="email" class="form-control" name="username" id="username" required>
                                    <div class="username">
                                        <span class="text-danger" hidden></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contraseña (*)</label>
                                    <input type="text" class="form-control" name="password" id="password" required>
                                    <div class="password">
                                        <span class="text-danger" hidden></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Provincia (*)</label>
                                    <input type="number" class="form-control" placeholder="..." name="telefono" id="telefono" required>
                                    <div class="telefono">
                                        <span class="text-danger" hidden></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Opciones</label><br>

                                    <input type="checkbox" value="Terminos" name="terminos" id="terminos" />Acepta terminos y condiciones<br>

                                </div>
                            </div>

                            <div class="col-md-11">
                                <div class="form-group">
                                    <label for="fecha">fecha/hora</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                                </div>
                            </div>
                            <input class="btn btn-primary btn-block" disabled type="button" value="enviar" id="registrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#registrar').click(function() {
                if ($('#password').val() == "") {

                    alertify.alert("Información:", "El campo CONTRASEÑA no debe estar vacio");

                } else if ($('#username').val() == "") {

                    alertify.alert("Información:", "El campo USERNAME no debe estar vacio");

                } else if ($('#telefono').val() == "") {

                    alertify.alert("Información:", "El campo TELEFONO no debe estar vacio");
                    
                } else if ($('#fecha').val() == "") {

                    alertify.alert("Información:", "El campo FECHA no debe estar vacio");

                }else {
                    alertify.alert("Información:", "Todos los datos son correctos");

                    

                    // cadena = "user=" + $('#usuario').val() +
                    //     "&pass=" + $('#password').val() +
                    //     "&email=" + $('#campeonato').val();

                    // $.ajax({
                    //     type: "POST",
                    //     url: "php/login.php",
                    //     data: cadena,
                    //     success: function(r) {
                    //         if (r == 1) {
                    //             window.location = "academia.php";
                    //         } else {
                    //             alertify.alert("Organizacion informa:", "Usuario o Contraseña incorrecto");
                    //         }
                    //     }
                    // });
                }

            });
            $('#terminos').on('checked', function(){
                $('#registrar').removeAttr('disabled','disabled');
            })
        });
    </script>

</body>

</html>