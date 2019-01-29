<!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h1>Nueva área</h1>
      <p>Asistencia Social</p>
    </div>

    <div class="page-header">
      <h2>Nueva área</h2>
    </div>
  <div class="row">
    <div class="col-xl-12">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Nueva área</h3>
        </div>
        <div class="panel-body">
        
          <?php echo validation_errors(); ?>

          <?php echo form_open('administration/insert_area'); ?>

          <div class="form-group row">
            <form>
              <div class="col-md-6">
                <label for="category_label">Nombre de Área</label>
                <input class="form-control" type="input" name="area" /><br />
              </div>
              
          </div>
          <input type="submit" name="submit" value="Guardar" class="btn btn-primary"/> 
              <?php anchor('administration/index','Volver', '<button type="button" class="btn btn-danger">Volver</button>');?>
            </form>
          </div>
      </div>
    </div><!-- /.col-sm-4 -->

</div>
</div> <!-- /container -->

