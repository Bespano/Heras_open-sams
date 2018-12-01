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
        <li><a href="#contact">Contacto</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
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
   <?php echo $success; if (isset($success)){ ?>
    
    <div class="alert alert-success" role="alert">
      <strong>Correcto</strong> <?php   echo (isset($success)) ? $success : "";?>
  </div>
  <?php 
  }else{echo "no success";}?>
 
  
 <a href="activity/create"><button type="button" class="btn btn-primary">Nueva actividad</button></a>
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
	            <td><?php echo $activity_item['activity_category']; ?></td>
	            <td><?php echo $activity_item['activity_group']; ?></td>
	            <td><?php echo $activity_item['activity_amount']; ?> €</td>
	            <td>  	   
				    <button type="button" class="btn btn-primary">Ver</button>
				    <button type="button" class="btn btn-warning">Editar</button>
				    <button type="button" class="btn btn-danger">Borrar</button>
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












