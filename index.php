<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Inicia Sesión</h2>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="inicio-form">
                <div class="form-group">
                  <label for="email">Usuario:</label>
                  <input type="text" class="form-control" id="email" placeholder="Usuario" name="usuari">
                  <span class="error">* <?php include ('valida.php');echo $nameErr;?></span>
                </div>
                <div class="form-group">
                  <label for="pwd">Contraseña:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="contra">
                  <span class="error">* <?php echo $ContraErr;?></span>
                </div>
                <div class="form-group form-check">
                </div>
                <button type="submit" name="login" value="login" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Enviar</button>
              </form>
              <p class="text-center text-muted mt-5 mb-0">¿No tienes cuenta? 
              <a href="registre.php"class="fw-bold text-body"><u>Regístrate</u></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
