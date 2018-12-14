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
        <li ><a href="activity">Actividad</a></li>
        <li class="active"><a href="volunteers">Voluntarios</a></li>
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
    <h1>Gestión de Voluntarios</h1>
    <p>Asistencia Social</p>
  </div>


  <div class="page-header">
    <h2>Listado de voluntarios</h2>
  </div>
   <?php echo $success; if (isset($success)){ ?>
    
    <div class="alert alert-success" role="alert">
      <strong>Correcto</strong> <?php   echo (isset($success)) ? $success : "";?>
  </div>
  <?php 
  }else{echo "no success";}?>
 
  
 <div class="pull-right">
    <a href="volunteers/insert_volunteer"><button type="button" class="btn btn-primary">Nuevo Voluntario</button></a>
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
            <th>Nombre y Apellidos</th>
            <th>Fecha de nacimiento</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Profesión</th>
            <th>Ocupación</th>
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
              <td><?php echo $volunteer_item['volunteer_profession']; ?></td>
              <td><?php echo $volunteer_item['volunteer_occupation']; ?></td>  
	            <td>  	   
				    <button type="button" class="btn btn-primary">Ver</button>
				    <?php $onclick = array('onclick'=>"return confirm('Desea editar el voluntario nº ".$volunteer_item['idVolunteer']." ?')");?> <?=anchor('volunteers/edit_volunteer/'.$volunteer_item['idVolunteer'], '<button type="button" class="btn btn-warning">Editar</button>',$onclick);?>
				    <?php $onclick = array('onclick'=>"return confirm('Desea borrar del voluntario nº ".$volunteer_item['idVolunteer']." ?')");?> <?=anchor('volunteers/delete/'.$volunteer_item['idVolunteer'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
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












