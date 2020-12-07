<?= $this->extend('layout/main')?>
  

  <?= $this->section('contenido')?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
    
     <ol class="breadcrumb">
     
     </ol>
   </section>

   <!-- Main content -->
   <section class="content container-fluid">
<div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informe de ventas</font></font></h3>

             <div class="box-tools pull-right">
               
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body no-padding">
             <div class="row">
               <div class="col-md-9 col-sm-8">
                 <div class="pad">
                   <!-- Map will be created here -->
                   
                 </div>
               </div>

               <section>

<h1 align="center">Informe de vgastos </h1>
                <div class="container">
                <div class="row">
                <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/crear' ?>">
                <label for="nombre">concepto_de_gasto</label>
                <input type="text" name="concepto_de_gasto" id=concepto_de_gasto class="form-control">

                <label for="paterno">monto_de_gasto</label>
                <input type="text" name="monto_de_gasto" id=monto_de_gasto class="form-control">
                <label for="materno">fecha</label>
                <input type="text" name="fecha" id=fecha class="form-control">
                <br>
                <button class="btn btn-primary">Guardar</button>
                </form>
                </div>
                </div>
                </div>

            <hr>
            <h2>Listado de personas</h2>
                <div class="row">
                <div class="col-sm-12">
                <div class ="table table-responsive">
                <table class=" table table-hover table-bordered">
                <tr>
                <th>concepto_de_gasto</th>
                <th>monto_de_gasto</th>
                <th>fecha</th>

                <th>Editar</th>
                <th>Eliminar</th>
                </tr>
                <?php foreach($datos as $key): ?>
                <tr>
                
                <td><?php echo $key->concepto_de_gasto ?></td>
                <td><?php echo $key->monto_de_gasto ?></td>
                <td><?php echo $key->fecha ?></td>
                <td>
                <a href="<?php echo base_url().'/obtenerdatos/'.$key->id_gasto ?>" class="btn btn-warning btn-sm">Editar</a> 
                
                </td>
                <td>
                <a href="<?php echo base_url().'/eliminar/'.$key->id_gasto ?>" class= "btn btn-danger btn-sm">Eliminar</a>
                </td>
                </tr>
                <?php endforeach; ?>
                </table>
                </div>
                </div>
                
                
                </div>
                </div>
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                
                    <script type="text/javascript"> 
		let mensaje = '<?php echo $mensaje ?>';

		if(mensaje == '1'){
			swal('😃','Agregado con exito', 'success');
			
		}else if(mensaje == '0'){

			swal('🙁','Falló al agregar', 'error');
			
		}else if(mensaje == '2'){

			swal('xD','Actualizado correctamente', 'success');

		}else if(mensaje == '3'){

			swal('🙁','Falló al actualizar', 'error');

		}else if(mensaje == '4'){

			swal('xD','Eliminado con exito', 'success');

		}else if(mensaje == '5'){

			swal('🙁','Falló al eliminar', 'error');

		}


                   
    

            

                

                
                
                </script>



</section>
            

   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
  <?= $this->endSection()?>