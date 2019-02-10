

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Registro de Actividad</h1>
    <p>Asistencia Social</p>
  </div>


  <div class="page-header">
    <h2>Registro de Actividad</h2>
    <a href="activity/view_report"><button type="button" class="btn btn-primary">Ver Informe</button></a>
  </div>
   <?php  
    if (isset($message)){ ?>
    
        <div class="alert alert-success" role="alert">
          <div id="infoMessage"><?php echo $message;?></div>
      </div>
      
   <?php }?>

 
  <div class="row">
      <div class="col-md-6 pull-right">
         
          <form class="form-inline" action="<?php echo base_url() . 'activity'; ?>" method="post">
            <select class="form-control" name="field">
                <option selected="selected" disabled="disabled" value="">Filtrar por</option>
                <option value="activity_category">Categoría</option>
                <option value="activity_subcategory">Subcategoría</option>
                <option value="activity_date">Mes</option>
            </select>
            <input class="form-control" type="text" name="search" value="" placeholder="Buscar...">
            <input class="btn btn-default" type="submit" name="filter" value="Ir">
            <a href="activity/insert_activity"><button type="button" class="btn btn-primary">Nueva actividad</button></a>
          </form>
      </div>
</div>
 
 <!-- Main table -->
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-striped table-hover table-condensed">

        <thead>
          <tr>
            <th>Nº</th>
            <th>Fecha</th>
            <th>Concepto</th>
            <th>Categoría</th>
            <th>Subcategoría</th>
            <th>Cantidad</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="buscar">
		
    	<?php foreach ($activity as $activity_item): ?>
				
	        <tr>
	            <td><?php echo $activity_item['idActivity']; ?></td>
	            <td><?php echo date("d/m/Y", strtotime($activity_item['activity_date'])); ?></td>
	            <td><?php echo $activity_item['activity_description']; ?></td>
	            <td><?php echo $activity_item['category_name']; ?></td>
	            <td><?php echo $activity_item['subcategory']; ?></td>
	            <td><?php echo $activity_item['activity_amount']; ?> €</td>
	            <td>  	   
            <?php /*View button*/ echo anchor('activity/view_activity/'.$activity_item['idActivity'], '<button type="button" class="btn btn-primary">Ver</button>');?>
           
            <?php /*Edit button*/ echo anchor('activity/edit_activity/'.$activity_item['idActivity'], '<button type="button" class="btn btn-warning">Editar</button>');?>
           
            <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Confirmar borrado de la actividad nº ".$activity_item['idActivity']." ?')");?> <?=anchor('activity/delete/'.$activity_item['idActivity'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
				</td>

	        </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
    </div> <!-- class="col-nav 6" -->
    
</div><!-- main table  -->



</div> <!-- /container -->

