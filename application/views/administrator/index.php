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
          <a href="administrador" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrador <span class="caret"></span></a>
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
    <h1>Administrador</h1>
    <p>Asistencia Social</p>
  </div>


  <div class="page-header">
    <h2>Categorías</h2>
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
            <a href="administrator/insert_category"><button type="button" class="btn btn-primary">Nueva categoría</button></a>
          </form>
      </div>
</div>
 
 <div class="row">
    </br>
 </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Categoría</th>
             <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
		
    	<?php foreach ($category as $category_item): ?>
				
	        <tr>
	            <td><?php echo $category_item['idCategory']; ?></td>
	            <td><?php echo $category_item['Category']; ?></td>

	            <td>  	   
            <?php /*View button*/ echo anchor('category/view_category/'.$category_item['idCategory'], '<button type="button" class="btn btn-primary">Ver</button>');?>
           
            <?php /*Edit button*/ echo anchor('category/edit_category/'.$category_item['idCategory'], '<button type="button" class="btn btn-warning">Editar</button>');?>
           
            <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Confirmar borrado de la actividad nº ".$category_item['idCategory']." ?')");?> <?=anchor('category/delete/'.$category_item['idCategory'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
				</td>

	        </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
    </div> <!-- class="col-nav 6" -->
    
</div>



</div> <!-- /container -->