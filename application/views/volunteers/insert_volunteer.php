<!-- Fixed navbar -->


<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Voluntarios</h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2>Nuevo voluntario/a</h2>
  </div>
  <div class="row">
    <div class="col-sm-6">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Nuevo voluntario/a</h3>
        </div>
        <div class="panel-body">
          
 
<?php echo validation_errors(); ?>

<?php echo form_open('volunteers/insert_volunteer'); ?>

    <label for="volunteer_date_label">Fecha de nacimiento</label>
    <input type="input" name="volunteer_birthdate" /><br />
    <label for="volunteer_firstname_label">Nombre</label>
    <input type="input" name="volunteer_firstname" /><br />
    <label for="volunteer_name_label">Apellidos</label>
    <input type="input" name="volunteer_lastname" /><br />
    <label for="volunteer_email_label">Email</label>
    <input type="input" name="volunteer_email" /><br />
    <label for="volunteer_phone_label">Teléfono</label>
    <input type="input" name="volunteer_phone" /><br />
    <label for="volunteer_profession_label">Profesión</label>
    <input type="input" name="volunteer_profession" /><br />
    <label for="volunteer_occupation_label">Ocupación</label>
    <input type="input" name="volunteer_occupation" /><br />
    <label for="volunteer_availability_label">Disponibilidad</label>
    <input type="input" name="volunteer_availability" /><br />
    <label for="volunteer_occupation_label">Preferencias</label>
    <input type="input" name="volunteer_occupation" /><br />
    <label for="volunteer_experience_label">Experiencia</label>
    <textarea name="volunteer_experience" rows="10" cols="50"></textarea><br />

  


    <input type="submit" name="submit" value="Create volunteer" class="btn btn-primary"/>

</form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    


  


</div> <!-- /container -->

