<?php
$user = $UsErr ="";
include('database.php');

if(isset($_POST["delete_user"])){
    if (empty($_POST["usuari_elimina"])) {
        $UsErr = "Usuario vacío";
    } else {
        $user=($_POST['usuari_elimina']);
        Delete_User($user);
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<a href="/Programacio_tercer/Practica_2_Natalia/cv_personal.php" class="link-secondary">Volver al Currículum</a>
    <div class="card text-center">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="border p-3 form">
            <div class="card-body" class="border p-3 form">
                <h5 class="card-title">Eliminar Usuario</h5>
                <p class="card-text">¿Quieres eliminar tu usuario?</p>
                <span class="error">* <?php echo $UsErr;?></span>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" name ="usuari_elimina" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
            <button type="submit" name = "delete_user" class="btn btn-light">Envia</button>
        </form>
    </div>
</div>

</body>
</html>

