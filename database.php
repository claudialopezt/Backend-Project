<?php
session_start();
include 'config.php';
//tindrem funcions de l'estil connect, add_user, delete_user, get_user_passwd...


//afegir una secció
function add_seccio ($seccio){
  $servername = "mysql-natalia.alwaysdata.net";
  $username = "natalia";
  $password = "Holaquetal123";
  $dbname = "natalia_cv";
  // Check connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql1 = "SELECT num_seccio FROM Seccions";
  $result = $conn->query($sql1);


  $sql1 = "INSERT INTO Seccions (num_seccio, curriculum_idCV, curriculum_usuaris_idUsuari)
  VALUES ('$seccio', '$_SESSION['id_cv']', '$_SESSION['id']')";

    
    if ($conn->query($sql1) === TRUE) {
      $_SESSION['seccion1']=$seccio;
      $_SESSION['seccion2']="";


    //si s'ha creat es redirigirà al cv
    header("location:cv_personal.php");
      

    } else {
      echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

  }



//$conn->close();





function add_user ($nom, $cognom, $email, $pssword, $user, $direccion, $telefon, $fecha, $pais, $estado, $carnet){
    $servername = "mysql-natalia.alwaysdata.net";
    $username = "natalia";
    $password = "Holaquetal123";
    $dbname = "natalia_cv";
    // Check connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT ID, nom, cognoms, email, user, psswd, direccio, movil, fecha, pais, estat_civil, carnet FROM usuari where email ='$email'";
    $result = $conn->query($sql);
  

    if($result->num_rows > 0 ){
      echo "Email ya registrado.";
    } else {
      $sql = "INSERT INTO usuari (nom, cognoms, email, user, psswd, direccio, movil, fecha, pais, estat_civil, carnet)
      VALUES ('$nom', '$cognom', '$email', '$user', '$pssword', '$direccion','$telefon', '$fecha', '$pais', '$estado', '$carnet')";
      

      
      if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $nom . " " . $cognom;
        $_SESSION['email'] = $email;
        $_SESSION['direccion']= $direccion;
        $_SESSION['telefono'] = $telefon;
        $_SESSION['fecha'] = $fecha;
        $_SESSION['pais']=$pais;
        $_SESSION['situacion']=$estado;
        $_SESSION['carnet']=$carnet;
        $_SESSION['perfil']="";
        $_SESSION['español']="";
        $_SESSION['seccion1']="";
        $_SESSION['seccion2']="";


      //si s'ha creat es redirigirà al cv
      header("location:cv_personal.php");
        

      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    }
  


//$conn->close();
}




function Delete_User($user){
  $servername = "mysql-natalia.alwaysdata.net";
  $username = "natalia";
  $password = "Holaquetal123";
  $dbname = "natalia_cv";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM usuari WHERE user = '$user'";

if ($conn->query($sql) === TRUE) {
  session_destroy();
  header("location:index.php");
  exit();
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
}




//funció per a la validació dels usuaris (inici de sessió)
function validar_usuaris($usuari, $contrasenya){

  $servername = "mysql-natalia.alwaysdata.net";
  $username = "natalia";
  $password = "Holaquetal123";
  $dbname = "natalia_cv";

  $conexion = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "SELECT ID, nom, cognoms, email, user, psswd, direccio, movil, fecha, pais, estat_civil, carnet FROM usuari where user ='$usuari' and psswd = '$contrasenya'";
  $result = $conexion->query($sql);

  //si existeix es redigirirà al cv
  if($result->num_rows >0 ){

    $row = $result->fetch_assoc();
    $_SESSION['id']=$row["ID"];
    $_SESSION['usuari'] =$usuari;
    $_SESSION['contrasenya']=$contrasenya;
    $_SESSION['username'] = $row["nom"] . " " . $row["cognoms"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['direccion'] = $row["direccio"];
    $_SESSION['telefono'] = $row["movil"];
    $_SESSION['fecha'] = $row["fecha"];
    $_SESSION['pais'] = $row["pais"];
    $_SESSION['situacion'] = $row["estat_civil"];
    $_SESSION['carnet'] = $row["carnet"];
    $_SESSION['perfil']="";
    $_SESSION['español']="";
    $_SESSION['seccion1']="";
    $_SESSION['seccion2']="";

    $sql2="SELECT idCV FROM curriculum where usuaris_idUsuari ='$_SESSION['id']'";
    $result1 = $conexion->query($sql2);

    if ($result1 === TRUE) {
      $_SESSION['id_cv'] = $row['idCV'];
    }
  
    header("location:cv_personal.php");
  } else {
    echo "Datos incorrectos";
  }



}


 
?>

