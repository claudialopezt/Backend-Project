
<?php
include 'database.php';
//definim les variables i les variables error
$nombre = $apellido = $email = $pssword = $user = $telefono = $direccion = $fecha = $pais = $estado = $carnet ="";
$Error = $nomErr = $CogErr= $EmErr = $PssErr = $UsErr = $TelErr = $DirErr = $FechErr= $PaisErr = $EstErr= $CarErr="";

//quan es premi el botó de registre, s'emmagatzemaran les dades del usuari, o be, els error, que els mostrarem a la plana del formulari
if (isset($_POST['register'])){
    if (empty($_POST["nombre"])) {
        $nomErr = "Usuario requerido";
    } else {
        $nombre=test_input($_POST['nombre']);
    } 
    if (empty($_POST["apellido"])) {
        $CogErr = "Apellido requerido";
    } else {
        $apellido=test_input($_POST['apellido']);
    }
    if (empty($_POST["email"])) {
        $EmErr = "Email requirido";
    } else {
        $email=test_input($_POST['email']);
    }
    if (empty($_POST["psswd"])) {
        $PssErr = "Contraseña requirida";
    } else {
        $pssword=test_input($_POST['psswd']);
    }
    if (empty($_POST["user"])) {
        $UsErr = "Usuario requirido";
    } else {
        $user=test_input($_POST['user']);
    }
    if (empty($_POST["telefono"])) {
        $TelErr = "Telefono requirido";
    } else {
        $telefono=test_input($_POST['telefono']);
    }
    if (empty($_POST["direccion"])) {
        $DirErr = "Direccion requirida";
    } else {
        $direccion=test_input($_POST['direccion']);
    }

    if (empty($_POST["fecha"])) {
        $FechErr = "Fecha requirida";
    } else {
        $fecha=test_input($_POST['fecha']);
    }
    if (empty($_POST["pais"])) {
        $PaisErr = "Pais requirido";
    } else {
        $pais=test_input($_POST['pais']);
    }

    if (empty($_POST["estado"])) {
        $EstErr = "Estado civil requirido";
    } else {
        $estado=test_input($_POST['estado']);
    }

    if (empty($_POST["carnet"])) {
        $CarErr = "Carnet requirido";
    } else {
        $carnet=test_input($_POST['carnet']);
    }

    if($nombre=="" || $apellido=="" || $email=="" || $pssword=="" || $user=="" || $telefono =="" || $direccion=="" || $fecha=="" || $pais=="" || $estado=="" || $carnet==""){
        $Error = "Registro incompleto";
    } else {
        add_user($nombre, $apellido, $email, $pssword, $user, $direccion, $telefono, $fecha, $pais, $estado, $carnet);
    }
}

//funció per a treure errades 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

