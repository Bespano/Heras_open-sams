<!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Registro de Actividad</h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2>Nueva actividad</h2>
  </div>
  <div class="row">
    <div class="col-xl-12">     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Nueva Actividad</h3>
        </div>
        <div class="panel-body">
          
          <form>  
            <?php echo validation_errors(); ?>

            <?php echo form_open('activity/insert_activity'); ?>

            <div class="form-group row">
              <div class="col-xs-3">
                <label for="activity_date_label">Fecha</label>
                <input class="form-control" type="input" name="activity_date" placeholder="AAAA/MM/DD" value="<?php echo set_value('activity_date'); ?>"/><br />
              </div>
              <div class="col-xs-6">
                <label for="activity_description_label">Descripción</label>
                <input class="form-control" type="input" name="activity_description" value="<?php echo set_value('activity_description'); ?>"/><br />
              </div>
            </div>
                
            <div class="form-group row">
              <div class="col-xs-3">
                <label for="activity_category_label">Categoría</label>
                <?php $category_options=$categories; $categories_selected=set_value('activity_category');  echo form_dropdown('activity_category',$category_options,$categories_selected,'class="form-control"'); ?><br />
              </div>
              <div class="col-xs-3">
                <label for="activity_subcategory_label">Subcategoría</label>
                <?php $subcategories_options=$subcategories; $subcategories_selected=set_value('activity_subcategory'); echo form_dropdown('activity_subcategory',$subcategories_options,$subcategories_selected,'class="form-control"'); ?><br />
              </div>
             
              <div class="col-xs-3">  
                <label for="activity_amount_label">Cantidad</label>
                <input class="form-control" type="input" name="activity_amount" value="<?php echo set_value('activity_amount'); ?>"/><br />
              </div>
            </div>  


            <input type="submit" name="submit" value="Guardar" class="btn btn-primary"/> 
            <a href="<?php echo base_url(); ?>activity"><button type="button" class="btn btn-primary">Volver</button></a>
                

          </form>

        </div> <!-- /.panel-body -->
      </div> <!-- /.panel panel-primary -->
    </div><!-- /.col-xl-12 -->
  </div>
</div> <!-- /container -->