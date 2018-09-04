<?php
 	session_start();
 	session_destroy();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="view/js/main.js"></script>
    <link rel="stylesheet" href="view/css/globalstyles.css">
    <link rel="stylesheet" href="view/css/styles.css">
    <title>Home</title>
  </head>
  <body>
    <div class="main">
      <div class="title">
        <p>ConInv JAADE</p>
      </div>
      <div class="containerform">
        <form method="post">
          <p>Inicio de Sesión</p>
          <div class="containerinputs">
            <input class="textfield" type="text" autocomplete="off" placeholder="Su Usuario" id="user" >
            <svg class="fas fa-user" aria-hidde="true" ></svg>
          </div>
          <div class="containerinputs">
            <input class="textfield" type="password" placeholder="Su Contraseña" id="pass" >
            <svg class="fas fa-unlock-alt" aria-hidde="true" ></svg>
          </div>
          <div class="containerinputs">
            <select name="rol" id="rol">
                <optgroup label="Seleccione Su Rol">
                    <option value="">Seleccione Su Rol</option>
                    <option value="1">Administrador</option>
                    <option value="2">Vendedor</option>
                </optgroup>
                </select>
            <svg class="fas fa-users" aria-hidde="true" ></svg>
          </div>
          <button type="button" name="button" id="btologin">Entrar</button>
          <div class="mensaje" id="mensaje"></div>
        </form>
      </div>
    </div>
  </body>
</html>
