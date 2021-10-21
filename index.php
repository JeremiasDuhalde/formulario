<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>formulario</title>

    <!--<link rel="stylesheet" type="text/css" href="css/estilo.css">-->
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
                                    <div class="username" hidden>
                                        <span class="text-danger">este campo es obligatorio</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contraseña (*)</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                    <div class="password">
                                        <span class="text-danger" hidden>este campo es obligatorio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirmar Contraseña (*)</label>
                                    <input type="password" class="form-control" name="repassword" id="repassword" required>
                                    <div class="repassword">
                                        <span class="text-danger" hidden>las contraseñas no coinciden</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Provincia (*)</label>
                                    <select name="provincias" id="provincias" class="form-control">

                                    </select>
                                    <div class="telefono">
                                        <span class="text-danger" hidden>este campo es obligatorio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                                    <label class="form-check-label" for="terminos">Acepto los Terminos y Condiciones</label>
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

    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script>
        $(document).ready(function() {
            $('#registrar').click(function() {
              
                if ($('#username').val() == "") {
                    $('.username').removeAttr('hidden','hidden');
                    alertify.alert("Información:", "El campo USERNAME no debe estar vacio");

                } else if ($('#password').val() == "") 
                {
                    $('.username').attr('hidden','hidden');
                    $('.password').removeAttr('hidden','hidden');
                    alertify.alert("Información:", "El campo CONTRASEÑA no debe estar vacio");
                } else if ($('#telefono').val() == "") 
                {
                    $('.password').attr('hidden','hidden');
                    $('.password').removeAttr('hidden','hidden');
                    alertify.alert("Información:", "El campo TELEFONO no debe estar vacio");
                } else if ($('#fecha').val() == "")  {
                    $('.telefono').attr('hidden','hidden');
                    $('.password').removeAttr('hidden','hidden');
                    alertify.alert("Información:", "El campo FECHA no debe estar vacio");
                } else
                {
                    
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
            $('#terminos').on('change', function(){
                if ($('#terminos').prop('checked') == true) {
                    $('#registrar').removeAttr('disabled','disabled');
                    
                } else {
                    $('#registrar').attr('disabled','disabled');
                    
                }
            })
        });
    </script>

</body>

</html>