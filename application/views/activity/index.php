<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">Asistencia Social</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li ><a href="index">Inicio</a></li>
        <li class="active"><a href="activity">Actividad</a></li>
        <li><a href="volunteers">Voluntarios</a></li>
        <li><a href="pantry">Despensa</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Salud</a></li>
            <li><a href="#">Educación</a></li>
            <li><a href="#">Carcelario</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Registro de Actividad</h1>
    <p>Asistencia Social</p>
  </div>


  <div class="page-header">
    <h2>Registro de Actividad</h2>
  </div>
   <?php echo $success; 
    if (isset($success)){ ?>
    
        <div class="alert alert-success" role="alert">
          <strong>Correcto</strong> <?php   echo (isset($success)) ? $success : "";?>
      </div>
  <?php       
    }else{?>
      <div class="alert alert-info" role="alert"> "Sin cambios"</div>
      
   <?php }?>

 
  <div class="row">
      <div class="pull-right">
          <form class="form-inline" action="<?php echo base_url() . 'activity'; ?>" method="post">
            <select class="form-control" name="field">
                <option selected="selected" disabled="disabled" value="">Filtrar por</option>
                <option value="activity_category">Categoría</option>
                <option value="activity_subcategory">Subcategoría</option>
                <option value="activity_date">Mes</option>
            </select>
            <input class="form-control" type="text" name="search" value="" placeholder="Buscar...">
            <input class="btn btn-default" type="submit" name="filter" value="Ir">
            <a href="activity/create"><button type="button" class="btn btn-primary">Nueva actividad</button></a>
          </form>
      </div>
</div>
 
 <div class="row">
    </br>
 </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Fecha</th>
            <th>Concepto</th>
            <th>Categoría</th>
            <th>Grupo</th>
            <th>Cantidad</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
		
    	<?php foreach ($activity as $activity_item): ?>
				
	        <tr>
	            <td><?php echo $activity_item['idActivity']; ?></td>
	            <td><?php echo date("d/m/Y", strtotime($activity_item['activity_date'])); ?></td>
	            <td><?php echo $activity_item['activity_description']; ?></td>
	            <td><?php echo $activity_item['Category']; ?></td>
	            <td><?php echo $activity_item['Groups']; ?></td>
	            <td><?php echo $activity_item['activity_amount']; ?> €</td>
	            <td>  	   
				    <button type="button" class="btn btn-primary">Ver</button>
				    <button type="button" class="btn btn-warning">Editar</button>
				
            
            <?php $onclick = array('onclick'=>"return confirm('Confirmar borrado de la actividad nº ".$activity_item['idActivity']." ?')");?> <?=anchor('activity/delete/'.$activity_item['idActivity'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
				</td>

	        </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
    </div> <!-- class="col-nav 6" -->
    
</div>



</div> <!-- /container -->












