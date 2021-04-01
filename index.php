<?php 

    require_once("Config/conexion.php");
    if (isset($_POST['enviar']) and $_POST['enviar'] == "si") {

        require_once("Models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
 ?>


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Helpsdesk WebM@c</title>
    <link rel="icon" href="public/img/icon.png">

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	 
	 






<link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<style>
    body{   
    background: url(public/img/fondologin.png) no-repeat center center fixed;
    background-repeat: no-repeat;
    background-size: 100% 100%;
 }
</style>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">


                <form class="sign-box" action="" method="POST" id="login-form">
                                    <input type="hidden" id="rol_id" name="rol_id" value="1">

                    <div class="sign-avatar">
                        <img src="public/img/1.PNG" alt="" id="imgtipo">
                    </div>
                    <header class="sign-title" id="lbltitulo">Usuario WebM@c</header>

    <?php 
        if (isset($_GET['m'])) {
            switch ($_GET['m']) {
                case '1':
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>       
                        </button>
                        <div class="d-flex align-items-center justify-content-start">
                            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0">
                                <span>El usuario y/o Contraseña son incorrectos</span>
                            </i>
                        </div>
                        
                    </div>

    <?php 


                    break;
                    case '2':
                    ?>
                     <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>       
                        </button>
                        <div class="d-flex align-items-center justify-content-start">
                            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                <span>Los Campos estan vacios</span>
                            
                        </div>
                        
                    </div>
                    <?php 
                        break;
                
                default:
                    # code...
                    break;
            }
        }



     ?>



                    <div class="form-group">
                        <input type="email" class="form-control" id="usu_correo" name="usu_correo"  placeholder="E-Mail or Phone"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="usu_pass" name="usu_pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <div class="float-right reset">
                            <a href="reset-password.html">Cambiar Contraseña</a>
                        </div>
                        <div class="float-left reset">
                            <a href="#" id="btnsoporte">Acceso Soporte</a>
                        </div>
                    </div>

                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button type="submit" class="btn btn-rounded">Acceder</button>
 

                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="public/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="public/js/lib/popper/popper.min.js"></script>
<script src="public/js/lib/tether/tether.min.js"></script>
<script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="public/js/app.js"></script>
<script src="index.js"></script>
</body>
</html>