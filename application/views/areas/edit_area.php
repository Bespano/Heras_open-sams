<!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1><?php echo $title ?></h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2><?php echo $title ?></h2>
  </div>
  <div class="row">
    <div class="col-xl-12">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $title ?></h3>
        </div>
        <div class="panel-body">
          
 
<?php foreach ($area_item as $area_data): ?>
<?php echo validation_errors(); ?>
<?php echo form_open('areas/edit_area/'.$area_data['idArea'].''); ?>
    
<form>
    <input type="hidden" name="idArea" value="<?php echo set_value('idArea',$area_data['idArea']); ?>" />
     <p class="text-muted"><?php echo "Creado el ".$area_data['area_creationdate'] ?></p>
              <p class="text-muted"><?php echo "Modificado por última vez el ".$area_data['area_lastmodificationdate'] ?></p>
    <div class="form-group row">
      <div class="col-xs-6">  
        <label for="area_label">Área</label>
        <input class="form-control" id="ex3" type="input" name="area_name" value="<?php echo set_value('area_name',$area_data['area_name']); ?>" />
      </div>
    </div>  
    
    
  <?php endforeach; ?>
        <input type="submit" name="submit" value="Guardar" class="btn btn-primary"/>
        <a href="<?php echo base_url(); ?>areas"><button type="button" class="btn btn-primary">Volver</button></a>
  </div>

</form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    


  


</div> <!-- /container -->

