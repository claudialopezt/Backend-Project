<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1 >¡Añade una sección a tu curriculum!</h1>
        </div>

    <form method="post" action="negoci_seccio.php" >
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <div class = "container">
                        <div class="controls"></div>
                                <div class="form-group">
                                    <label for="form_seccio1"><h3>Título de la sección: </h3></label>
                                    <input id="form_seccio1" type="text" name="seccion1" class="form-control" placeholder="Ex: Idiomes" required="required">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_comp1">Competencia 1: </label>
                                        <input id="form_comp1" type="text" name="comp1" class="form-control" placeholder="Ex: Español" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_level1">Nivel Competencia 1: </label>
                                        <input id="form_level1" type="number" name="surname" class="form-control" placeholder="1 - 100" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_comp2">Competencia 2: </label>
                                        <input id="form_comp2" type="text" name="comp2" class="form-control" placeholder="Ex: Catalán" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_level2">Nivel Competencia 2: </label>
                                        <input id="form_level2" type="number" name="surname" class="form-control" placeholder="1 - 100" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_comp3">Competencia 3: </label>
                                        <input id="form_comp3" type="text" name="comp1" class="form-control" placeholder="Ex: Inglés" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_level3">Nivel Competencia 3: </label>
                                        <input id="form_level3" type="number" name="surname" class="form-control" placeholder="1 - 100" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            

                            <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Guardar" name="submit_seccio1">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         
        </div>
      </div>
    </div>
    </div>

</html>