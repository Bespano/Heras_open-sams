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
      <a class="navbar-brand" href="#">Bootstrap theme</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li ><a href="index">Inicio</a></li>
        <li class="active"><a href="activity">Actividad</a></li>
        <li><a href="#contact">Contact</a></li>
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
    <p>Asistencia Social Hermandad Macarena</p>
  </div>

  <div class="page-header">
    <h2>Nueva actividad</h2>
  </div>
  <div class="row">
    <div class="col-sm-4">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Nueva Actividad</h3>
        </div>
        <div class="panel-body">
          
 
<?php echo validation_errors(); ?>

<?php echo form_open('activity/create'); ?>

    <label for="activity_date_label">Fecha</label>
    <input type="input" name="activity_date" /><br />
    <label for="activity_description_label">Descripción</label>
    <input type="input" name="activity_description" /><br />
    <label for="activity_category_label">Categoría</label>
    <?php $category_options= $categories; echo form_dropdown('activity_category',$category_options); ?><br />
    <label for="activity_group_label">Grupo</label>
    <?php $groups_options= $groups; echo form_dropdown('activity_group',$groups_options); ?><br />
    <label for="activity_amount_label">Cantidad</label>
    <input type="input" name="activity_amount" /><br />


    <input type="submit" name="submit" value="Create news item" class="btn btn-primary"/>

</form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    


  


</div> <!-- /container -->

