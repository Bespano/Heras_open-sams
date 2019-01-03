<!-- Fixed navbar -->


<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Actividad</h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2>Ver actividad</h2>
  </div>
  <div class="row">
    <div class="col-sm-6">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ver actividad</h3>
        </div>
        <div class="panel-body">
          

<?php foreach ($activity_item as $activity_data): ?>
<?php echo form_open('activity/edit_activity/'.$activity_data['idActivity'].''); ?>
 <form>
    <input type="hidden" name="idactivity" value="<?php echo set_value('idactivity',$activity_data['idActivity']); ?>" />
    <p class="text-muted"><?php echo "Creado el :".$activity_data['activity_creationdate'] ?></p>
    <p class="text-muted"><?php echo "Modificado por última vez el ".$activity_data['activity_lastmodificationdate'] ?></p>
    <label for="activity_date_label">Fecha</label>
    <input type="input" class="form-control" name="activity_date" value="<?php echo set_value('activity_date',$activity_data['activity_date']); ?>" readonly/><br />
    <label for="activity_description">Descripción</label>
    <input type="input" class="form-control" name="activity_description" value="<?php echo set_value('activity_description',$activity_data['activity_description']); ?>"  readonly readonly/><br />
    
    <label for="activity_category_label">Categoría</label>
    <?php $category_options= $categories; echo form_dropdown('activity_category',$category_options, $activity_data['activity_category'],'class="form-control"', 'disabled=disabled'); ?> <br />
    
    <label for="activity_subcategory_label">Subcategoría</label>
    <?php $subcategory_options= $subcategories;echo form_dropdown('activity_subcategory',$subcategory_options,$activity_data['activity_subcategory'],'class="form-control"', 'disabled=disabled'); ?> <br />
    
    <label for="activity_amount">Cantidad</label>
    <input type="input" class="form-control" name="activity_amount" value="<?php echo set_value('activity_amount',$activity_data['activity_amount']); ?>"  readonly readonly/><br />
    <a href="<?php echo base_url(); ?>activity"><button type="button" class="btn btn-primary">Volver</button></a>
    

  <?php endforeach; ?>


    

</form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    </div>
</div> <!-- /container -->

