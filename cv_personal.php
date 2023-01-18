<?php
session_start();
$usuario = $_SESSION['username'];


//d'aquesta manera comprovarem si la sessió de l'usuari s'ha obert correctament, amb un missatge de benvinguda
if(!isset($usuario)){
    header("location:index.php");
} 

?>

<html>
    <title>Currículum</title>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <a class="btn btn-ligh float-right" name="logout" href="/Programacio_tercer/Practica_2_Natalia/logout.php" role="button">Cerrar Sesión</a>
    <a class="btn btn-ligh float-right" name="logout" href="/Programacio_tercer/Practica_2_Natalia/delete.php" role="button">Delete User</a>
        <div class="jumbotron text-center">
            <img src="Images/hombre.jpg" class="float-left rounded-circle img-fluid img-thumbnail" alt="Foto Currículum" width="240" height="106"> 
            <h1> <?php echo $_SESSION['username'];?></h1>

        </div>
        <div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-4">
                <table>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg></td>
                          <td><h5>Datos personales</h5></td>
                    </tr>
                </table>
                <hr class="col-xs-12">
                <table>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg></td>
                          <td>
                            <?php echo $_SESSION['username']; ?>
                          </td>
                    </tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                          </svg></td>
                          <td>
                          <p><br><?php echo $_SESSION['direccion']; ?>   </p>   
                          </td>
                    </tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg></td>
                          <td>     
                          <p>  <?php echo $_SESSION['telefono']?> </p>            
                        </td>
                    </tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                            <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
                          </svg></td>
                          <td>
                          <br>
                            <p><?php echo $_SESSION['email'];?></p>
                          </td>
                    </tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                          </svg></td>
                          <td>  
                          <br><p><?php echo $_SESSION['fecha']; ?></p>                        
                        </td>
                    </tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                            <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                          </svg></td>
                          <td>
                            <p><?php echo $_SESSION['pais']; ?></p>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                          </svg></td>
                          <td>
                          <p><br><?php echo $_SESSION['situacion'] ?></p>
                          </td>
                    </tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189l.956-1.913A.5.5 0 0 1 4.309 3h7.382a.5.5 0 0 1 .447.276l.956 1.913a.51.51 0 0 1-.497.731c-.91-.073-3.35-.17-4.597-.17-1.247 0-3.688.097-4.597.17a.51.51 0 0 1-.497-.731Z"/>
                          </svg></td>
                          <td>
                            <p><?php echo $_SESSION['carnet']?></p>
                          </td>
                    </tr>
                </table>
                <br>
                <br>
                <table>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                          <td><h5><p><?php echo $_SESSION['seccion1']?></p></h5>
                        </td>
                          
                        <td>
                        <a class="btn btn-light" name="seccio1" href="/Programacio_tercer/Practica_2_Natalia/seccion1.php" role="button">+</a>
                        
                        </td>
                    </tr>
                </table>
                <hr class="col-xs-12">
                <div class="container">   
                    <table class="table">
                      <tbody>
                        <tr>
                        <td>                            
                            <br>
                            <br>
                        </td>
                        <td><div class="progress">
                                  <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="70"></div>
                              </div>
                        </td>
                        </tr>
                        <tr>
                          <td>
                          <br>
                            <br>
                          </td>
                          <td><div class="progress">
                                  <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                              </div></td>
                        </tr>
                        <tr>
                          <td>
                          <br>
                            <br>
                          </td>
                          <td><div class="progress">
                                  <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                              </div></td>
                        </tr>
                        <tr>
                            <td>
                            <br>
                            <br>
                            </td>
                            <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                          </tr>
                          <tr>
                            <td>
                            <br>
                            <br>
                            </td>
                            <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                          </tr>
                      </tbody>
                    </table>
                    <table>
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg></td>
                              <td><h5>Sección</h5></td>
                        </tr>
                    </table>
                    <hr class="col-xs-12">
                    
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                <p>Español</p>
                                <br>
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="<?php echo $_SESSION['español'];?>" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                            <tr>
                                <td>
                                <br>
                                <br> 
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                            <tr>
                                <td>
                                <br>
                                <br>
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                            <tr>
                                <td>
                                <br>
                                <br>
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <table>
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg></td>
                              <td><h5>Sección</h5></td>
                        </tr>
                    </table>

                    <hr class="col-xs-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                <br>
                                <br>
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                            <tr>
                                <td>
                                <br>
                                <br>
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                            <tr>
                                <td>
                                <br>
                                <br>
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                            <tr>
                                <td>
                                <br>
                                <br>
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                            <tr>
                                <td>
                                <br>
                                <br>
                                </td>
                                <td><div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
                                </div></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg></td>
                              <td><h5>Sección</h5></td>
                        </tr>
                    </table>
                    <hr class="col-xs-12">
                    <table>
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                              </svg></td>
                              <td><p>
                              <br>
                                <br>
                              </p></td>
                        </tr>
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                              </svg></td>
                            <td><p>
                            <br>
                                <br>
                            </p></td>
                        </tr>
                    </table>
                    
                
                </div>
 
 
              </div>
              <div class="col-sm-8">
                <table>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg></td>
                          <td><h5>Perfil</h5></td>
                    </tr>
                </table>
                <hr class="col-xs-12">
                  <p>
                  <?php echo $_SESSION['perfil']; ?>
                  </p>
                  <table>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                        </td>
                        <td>
                            <h5><?php echo $_SESSION['seccion1'];?></h5>
                        </td>
                    </tr>
                </table>
                 <hr class="col-xs-12">
                <div class="container">         
                    <table class="table table-borderless">
                    <tbody>
                        <tr>
                        <td>xx/xxxx - xx/xxxx</td>
                        <td><strong>Cargo 1</strong> <br>
                          <br>
                        </td>
                
                        </tr>
                        <tr>
                        <td>xx/xxxx - xx/xxxx</td>
                        <td><strong>Cargo 2 </strong><br>
                            <br>
                        </td>
                
                        </tr>
                        <tr>
                        <td>xx/xxxx - xx/xxxx</td>
                        <td><strong>Cargo 3</strong><br>
                        <br>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <table>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg></td>
                          <td><h5><?php echo $_SESSION['seccion2'];?></h5></td>
                    </tr>
                </table>
                <hr class="col-xs-12">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                        <td>xx/xxxx - Presente</td>
                        <td><strong>Cargo 4</strong> <br>
                            <br>
                        </td>
                
                        </tr>
                    </tbody>
                </table>

              </div>
            </div>
          </div>
    </body>
    <footer>
        <div class="jumbotron text-right" style="margin-bottom:0">
            <p>Página 1</p>
          </div>
    </footer>
</html>

