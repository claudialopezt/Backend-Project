<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
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
              <h2 class="text-uppercase text-center mb-5">¡Crea una cuenta!</h2>
              <span class="error">* <?php include ('alta.php');echo $Error;?></span>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="registro-form">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Nombre:</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="nombre"/>
                  <span class="error">* <?php echo $nomErr;?></span>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Apellido:</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="apellido"/>
                  <span class="error">* <?php echo $CogErr;?></span>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Email:</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email"/>
                  <span class="error">* <?php echo $EmErr;?></span>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Contraseña:</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="psswd"/>
                  <span class="error">* <?php echo $PssErr;?></span>
                </div>

            
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Nuevo usuario:</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="user" pattern="[a-zA-Z0-9]+"/>
                  <span class="error">* <?php echo $UsErr;?></span>
                </div>
                
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Dirección:</label>
                <input type="texto" id="form3Example3cg" class="form-control form-control-lg" name="direccion"/>
                <span class="error">* <?php echo $DirErr;?></span>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Telefono:</label>
                <input type="number" id="form3Example3cg" class="form-control form-control-lg" name="telefono"/>
                <span class="error">* <?php echo $TelErr;?></span>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Fecha:</label>
                <input type="texto" id="form3Example3cg" class="form-control form-control-lg" name="fecha"/>
                <span class="error">* <?php echo $FechErr;?></span>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Pais:</label>
                <input type="texto" id="form3Example3cg" class="form-control form-control-lg" name="pais"/>
                <span class="error">* <?php echo $PaisErr;?></span>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Estado Civil:</label>
                <input type="texto" id="form3Example3cg" class="form-control form-control-lg" name="estado"/>
                <span class="error">* <?php echo $EstErr;?></span>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Carnet:</label>
                <input type="texto" id="form3Example3cg" class="form-control form-control-lg" name="carnet"/>
                <span class="error">* <?php echo $CarErr;?></span>
                </div>                

                <div class="d-flex justify-content-center">
                  <button type="submit" name="register" value="register"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Regístrate</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">¿Ya tienes una cuenta? <a href="index.php"
                    class="fw-bold text-body"><u>¡Inicia Sesión!</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
