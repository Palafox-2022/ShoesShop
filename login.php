<!DOCTYPE html>
<html lang="en">
<?php
require('autenticacion.php');
?>

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Inicia Sesión | SHOESSHOP</title>
      <link rel="stylesheet" href="../css/estilos.css">
      <script src="https://kit.fontawesome.com/cc83a457b4.js" crossorigin="anonymous"></script>

</head>

<body id="paginaLogin">

      <main id="main">
            <img src="../img/LogoShoesShop.png" alt="">

            <form action="#" class="login login_iniciar" method="post" enctype="multipart/form-data" utf8_encode>

                  <span style="width: 100%; text-align:center; font-size:20px;">Inicio de Sesión </span>
                  <span>¿No tienes una cuenta? <span id="crear_cuenta" style="cursor: pointer; color:blue;">Crea una</span></span>

                  <div class="caja">
                        <input type="text" name="usuario" id="usuario" required>
                        <label for="usuario"><i class="fa fa-user" aria-hidden="true"></i> Usuario</label>
                  </div>

                  <div class="caja">
                        <input type="password" name="usuario" id="usuario" required>
                        <label for="usuario"><i class="fa fa-lock" aria-hidden="true"></i> Contrasena</label>
                  </div>
                  <a href="#" style="color:blue">¿Olvidaste tu contraseña?</a>
                  <span style="width: 100%; text-align:center;">Inicia con</span>
                  <hr>
                  <a href="<?php echo $cliente->createAuthUrl() ?>" class="iniciar_con google"> <i class="fa fa-google" id="estilar_como_google" aria-hidden="true"></i> </a>
                  <a href="#" class="iniciar_con facebook"> <i class="fa fa-facebook-square" id="face" aria-hidden="true"></i> </a>

                  <input type="submit" value="Iniciar" name="iniciar">
            </form>

            <form action="#" class="login login_registrar" method="post" enctype="multipart/form-data" utf8_encode>

                  <span style="width: 100%; text-align:center; font-size:20px;">Crea tu cuenta ahora </span>
                  <span>¿ Ya estas registrado ? <span style="cursor: pointer; color:blue;" id="iniciar_sesion">Inicia Sesión</span></span>

                  <div class="caja">
                        <input type="text" name="usuario" id="usuario" required>
                        <label for="usuario"><i class="fa fa-user" aria-hidden="true"></i>Usuario</label>
                  </div>

                  <div class="caja">
                        <input type="password" name="usuario" id="usuario" maxlength="8" pattern="[a-zA-Z]{*}[0-9]{*}" required>
                        <label for="usuario"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
                  </div>

                  <div class="caja">
                        <input type="password" name="usuario" id="usuario" maxlength="8" pattern="[a-zA-Z]{*}[0-9]{*}" required>
                        <label for="usuario"><i class="fa fa-lock"></i> Repetir Password</label>
                  </div>


                  <div class="caja">
                        <input type="mail" name="correo" id="correo" required>
                        <label for="usuario"><i class="fa fa-envelope" aria-hidden="true"></i> Correo</label>
                  </div>
                  <input type="submit" value="Registrar" name="registrar">
            </form>


      </main>

      <script src="../js/index.js"></script>
</body>

</html>
