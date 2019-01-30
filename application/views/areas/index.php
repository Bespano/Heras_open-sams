<!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Areas</h1>
    <p>Asistencia Social</p>
  </div>
 
  <div class="row">
    <div class="col-md-5">
      <div class="page-header">
        <h2>Áreas</h2>
      </div>
      <div class="row">
        <div class="pull-right">
             <a href="areas/insert_area"><button type="button" class="btn btn-primary">Nueva Área</button></a>
        </div>
      
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Área</th>
             <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
		
    	<?php foreach ($area as $area_item): ?>
				
	        <tr >
	            <td><?php echo $area_item['idArea']; ?></td>
	            <td><?php echo $area_item['area_name']; ?></td>

	            <td>  	   


                 



           
            <?php /*Edit button*/ echo anchor('areas/edit_area/'.$area_item['idArea'], '<button type="button" class="btn btn-warning">Editar</button>');?>
           
            <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Confirmar borrado de la categoría nº ".$area_item['idArea']." ?')");?> <?=anchor('areas/delete_area/'.$area_item['idArea'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
				</td>

	        </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
      </div>
    </div> <!-- class="col-nav 6" -->

   


    
</div>



</div> <!-- /container -->