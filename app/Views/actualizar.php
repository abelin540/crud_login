<?php 

$idnombre=$datos[0]['id_gasto'];
$nombre=$datos[0]['concepto_de_gasto'];

$paterno=$datos[0]['monto_de_gasto'];
$materno=$datos[0]['fecha'];




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualizar Nombre</title>
  </head>
  <body>

  <div class="container">

    <div class="row">
    <div class="col-sm-12">
    <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
    <input type="text" name="id_gasto" id="id_gasto" hidden="" 
    
    value="<?php echo $idnombre ?>"
    >
    





  
                <label for="nombre">concepto_de_gasto</label>
                <input type="text" name="concepto_de_gasto" id=concepto_de_gasto class="form-control"
                value="<?php echo $nombre?>">


                <label for="paterno">monto_de_gasto</label>
                <input type="text" name="monto_de_gasto" id=monto_de_gasto class="form-control"
                value="<?php echo $paterno?>">

                <label for="materno">fecha</label>
                <input type="text" name="fecha" id=fecha class="form-control"     value="<?php echo $materno ?>">

                <br>
                <button class="btn btn-primary">Guardar</button>
                </form>
                </div>
                </div>
                </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  </body>
</html>