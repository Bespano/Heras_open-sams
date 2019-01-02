<!-- Fixed navbar -->


<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Actividad</h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2>Editar actividad</h2>
  </div>
  <div class="row">
    <div class="col-xl-12">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Editar actividad</h3>
        </div>
        <div class="panel-body">
          
 
<?php foreach ($activity_item as $activity_data): ?>
<?php echo validation_errors(); ?>
<?php echo form_open('activity/edit_activity/'.$activity_data['idActivity'].''); ?>
    <input type="hidden" name="idActivity" value="<?php echo set_value('idActivity',$activity_data['idActivity']); ?>" />
    
    <div class="form-group row">
      <div class="col-xs-3">
        <label for="activity_date_label">Fecha</label>
        <input class="form-control" type="input" name="activity_date" placeholder="" value="<?php echo set_value('activity_date',$activity_data['activity_date']); ?>" />
      </div>

      <div class="col-xs-6">  
        <label for="activity_description_label">Descripción</label>
        <input class="form-control" id="ex3" type="input" name="activity_description" value="<?php echo set_value('activity_description',$activity_data['activity_description']); ?>" />
      </div>
    </div>  
    <div class="form-group row">
      <div class="col-xs-3">
        <label for="activity_category_label">Categoría</label>
        <?php $category_options= $categories; echo form_dropdown('activity_category',$category_options,$activity_data['activity_category'],'class="form-control"'); ?><br />
        
      </div>
      <div class="col-xs-3">
        <label for="activity_subcategory_label">Subcategoría</label>
        <?php $category_options= $subcategories; echo form_dropdown('activity_subcategory',$category_options,$activity_data['activity_subcategory'],'class="form-control"'); ?><br />
      </div>

      <div class="col-xs-3">  
        <label for="activity_amount_label">Cantidad</label>
        <input class="form-control" type="input" name="activity_amount" value="<?php echo set_value('activity_amount',$activity_data['activity_amount']); ?>"/>
      </div>
    </div>  
  <?php endforeach; ?>


        <input type="submit" name="submit" value="Guardar" class="btn btn-primary"/>
  

</form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    


  


</div> <!-- /container -->

