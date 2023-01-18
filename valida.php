<?php

include 'database.php';
// define variables and set to empty values
$usuari = $contrasenya = "";
$nameErr = $ContraErr= "";

//quan el botó es premi cridarem a la funció que validarà les dades
if (isset($_POST['login'])) {
    if (empty($_POST["usuari"])) {
        $nameErr = "Usuari requirit";
    } else {
        $usuari = test_input($_POST["usuari"]);
    }
    if (empty($_POST["contra"])) {
        $ContraErr = "Contrasenya requerida";
    } else {
        $contrasenya = test_input($_POST["contra"]);
    }
    validar_usuaris($usuari,$contrasenya);

  }
  
  //aquesta funció farà tot el check per nosaltres: treurà els espais que molestin, les barres, etc
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


?>