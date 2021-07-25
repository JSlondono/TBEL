<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Inicio de sesión</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title">REGISTRO</span><br>
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Nombre de usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="text" id="password" name="NombreNegocio" placeholder="Nombre de tu negocio">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Contraseña">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                
                    <div class="wrap-login-form-btn">
                    
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="register" class="login-form-btn">Enviar</button>
                    </div>
                </div>
                <br>
                <div class="content-center" > <style> .content-center{  text-align: center;}</style>
                <a href="../login/index.php">¿Ya tienes una cuenta?</a> </div><br>
                
                <a href="/final/index.html" ><img src="../icons/home.svg" class="cr" width="22px"><style> .cr{  display:block; margin:  auto;}</style> </a>
            </form>
            <?php 
        include("registrar.php");
        ?>
        </div>
    </div>     
        
        
     
    </body>
</html>