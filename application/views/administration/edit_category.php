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
          
 
<?php foreach ($category_item as $category_data): ?>
<?php echo validation_errors(); ?>
<?php echo form_open('administration/edit_category/'.$category_data['idCategory'].''); ?>
    
<form>
    <input type="hidden" name="idCategory" value="<?php echo set_value('idCategory',$category_data['idCategory']); ?>" />
    
    <div class="form-group row">
      <div class="col-xs-6">  
        <label for="category_label">Categoría</label>
        <input class="form-control" id="ex3" type="input" name="category" value="<?php echo set_value('Category',$category_data['Category']); ?>" />
      </div>
    </div>  
    
    
  <?php endforeach; ?>
        <input type="submit" name="submit" value="Guardar" class="btn btn-primary"/>
        <a href="<?php echo base_url(); ?>administration"><button type="button" class="btn btn-primary">Volver</button></a>
  </div>

</form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    


  


</div> <!-- /container -->

