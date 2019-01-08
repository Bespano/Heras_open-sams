!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Administración</h1>
    <p>Asistencia Social</p>
  </div>
 
 
<div class="row">
    <div class="col-md-5">
      <div class="page-header">
        <h2>Módulos</h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
  

<form>

     
    <?php foreach ($module_data as $module_item): ?>   
        <?php echo validation_errors(); ?>
        <?php echo form_open('administration/set_module_status/'); ?>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" <?php if($module_item['module_status']) { echo 'checked="checked"'; } ?>" value="">
            <label class="form-check-label" for="defaultCheck1"><?php echo $module_item['module_name']; ?></label>
          </div>
    <?php endforeach; ?>
    

  
<input type="submit" name="submit" value="Guardar" class="btn btn-primary"/>
</div>
</form>

</div>
</div>
</div>
</div>
</div> <!-- /container -->