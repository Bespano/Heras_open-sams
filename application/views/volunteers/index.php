<!-- Fixed navbar -->


<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Gestión de Voluntarios</h1>
    <p>Asistencia Social</p>
  </div>


  <div class="page-header">
    <h2>Listado de voluntarios</h2>
  </div>
   <?php 

   if($info_message_view)  
  {   ?>
      <div class="alert alert-success" role="alert">
        <strong>Correcto</strong> <?php echo $info_message_view; ?>
      </div>
      <?php  }?>
 
  <div class="row">
    <div class="col-md-6 pull-right">

          <form class="form-inline" action="<?php echo base_url() . 'volunteers'; ?>" method="post">
                <select class="form-control" name="field">
                    <option selected="selected" disabled="disabled" value="">Filtrar por</option>
                    <option value="volunteer_firstname">Nombre</option>
                    <option value="volunteer_phone">Teléfono</option>
                </select>
                <input class="form-control" type="text" name="search" value="" placeholder="Buscar...">
                <input class="btn btn-default" type="submit" name="filter" value="Ir">  
                <a href="volunteers/insert_volunteer"><button type="button" class="btn btn-primary">Nuevo Voluntario</button></a>
          </form>
      </div>

  </div>


  <div class="row">
    <div class="col-md-12">

      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Nombre y Apellidos</th>
            <th>Fecha de nacimiento</th>
            <th>Teléfono</th>
            <th>Email</th>

            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>
		
    	<?php foreach ($volunteers as $volunteer_item): ?>
				
	        <tr>
	            <td><?php echo $volunteer_item['idVolunteer']; ?></td>
	            
	            <td><?php echo $volunteer_item['volunteer_firstname'].' '.$volunteer_item['volunteer_lastname']; ?></td>
	            
              <td><?php echo date("d/m/Y", strtotime($volunteer_item['volunteer_birthdate'])); ?></td>
	            <td><?php echo $volunteer_item['volunteer_phone']; ?></td>
              <td><?php echo $volunteer_item['volunteer_email']; ?></td>
            
	            <td>  	   
    				    <?php /*View button*/ echo anchor('volunteers/view_volunteer/'.$volunteer_item['idVolunteer'], '<button type="button" class="btn btn-primary">Ver</button>');?>
    				   
                <?php /*Edit button*/ echo anchor('volunteers/edit_volunteer/'.$volunteer_item['idVolunteer'], '<button type="button" class="btn btn-warning">Editar</button>');?>
    				   
                <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Desea borrar del voluntario nº ".$volunteer_item['idVolunteer']." ?')");?> <?=anchor('volunteers/delete/'.$volunteer_item['idVolunteer'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
				      </td>

	        </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
    </div> <!-- class="col-nav 6" -->

  </div>


  

</div>





</div>



</div> <!-- /container -->












