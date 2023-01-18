<?php
include 'database.php';

$SeccErr = "";
$seccio1="";
if (isset($_POST['submit_seccio1'])){
  if (empty($_POST["seccion1"])) {
      $SeccErr = "Seccio requerida";
  } else {
      $seccio1=test_input($_POST['seccion1']);
  } 

  if($seccio1=="" ){
    $Error = "Registro incompleto";
} else {
    add_seccio($seccio1);
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