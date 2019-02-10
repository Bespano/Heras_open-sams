<!-- Fixed navbar -->


<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Actividad</h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2>Informe de actividad</h2>
  </div>
  <div class="row">
    <div class="col-sm-12">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Informe de actividad</h3>
        </div>
        <div class="panel-body">
          

<?php foreach ($activity as $activity_data): ?>


   <h3 class="panel-title">Informe de actividad</h3>
  
    <label for="activity_date_label">Fecha</label>
    <?php echo $activity_data['activity_date']; ?>
    <label for="activity_description">Descripción</label>
    <?php echo $activity_data['activity_description']; ?>
    
    
    
    <label for="activity_amount">Cantidad</label>
    <?php echo $activity_data['activity_amount']; ?> € 
  
    

    <?php endforeach; ?>


  

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    </div>
</div> <!-- /container -->

