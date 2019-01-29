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
             <a href="area/insert_area"><button type="button" class="btn btn-primary">Nueva Área</button></a>
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
				
	        <tr onclick="input" data-toggle="modal" href="#Viewarea_Modal">
	            <td><?php echo $area_item['idArea']; ?></td>
	            <td><?php echo $area_item['area_name']; ?></td>

	            <td>  	   


              <!-- Modal -->
                <div class="modal fade" id="Viewarea_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalle Área</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <?php echo $area_item['idArea']; ?>
                        <?php echo $area_item['area_name']; ?>
                        <?php echo $area_item['area_creationdate']; ?>
                        <?php echo $area_item['area_lastmodificationdate']; ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      </div>
                    </div>
                  </div>
                </div>    



           
            <?php /*Edit button*/ echo anchor('area/edit_area/'.$area_item['idArea'], '<button type="button" class="btn btn-warning">Editar</button>');?>
           
            <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Confirmar borrado de la categoría nº ".$category_item['idCategory']." ?')");?> <?=anchor('administration/delete_category/'.$category_item['idCategory'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
				</td>

	        </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
      </div>
    </div> <!-- class="col-nav 6" -->

   


    
</div>



</div> <!-- /container -->