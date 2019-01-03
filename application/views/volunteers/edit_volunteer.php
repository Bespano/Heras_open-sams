<!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Voluntarios</h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2>Editar voluntario/a</h2>
  </div>
  <div class="row">
    <div class="col-sm-6">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Editar voluntario/a</h3>
        </div>
        <div class="panel-body">
          
         <form>
            <?php foreach ($volunteer_item as $volunteer_data): ?>
                <?php echo validation_errors(); ?>
                <?php echo form_open('volunteers/edit_volunteer/'.$volunteer_data['idVolunteer'].''); ?>
                <input type="hidden"  name="idVolunteer" value="<?php echo set_value('idVolunteer',$volunteer_data['idVolunteer']); ?>" />
                
                <p class="text-muted"><?php echo "Creado el ".$volunteer_data['volunteer_creationdate'] ?></p>
                <p class="text-muted"><?php echo "Modificado por última vez el ".$volunteer_data['volunteer_lastmodificationdate'] ?></p>
                
                <label for="volunteer_birthdate_label">Fecha de nacimiento</label>
                <input type="input" name="volunteer_birthdate" class="form-control" placeholder="Introduzca la fecha de nacimiento AAAA/MM/DD" value="<?php echo set_value('volunteer_birthdate',$volunteer_data['volunteer_birthdate']); ?>" /><br />
               
                <label for="volunteer_firstname_label">Nombre</label>
                <input type="input" name="volunteer_firstname" class="form-control" value="<?php echo set_value('volunteer_firstname',$volunteer_data['volunteer_firstname']); ?>" /><br />
               
                <label for="volunteer_lastname_label">Apellidos</label>
                <input type="input" name="volunteer_lastname" class="form-control"  value="<?php echo set_value('volunteer_lastname',$volunteer_data['volunteer_lastname']); ?>" /><br />
               
                <label for="volunteer_email_label">Email</label>
                <input type="email" name="volunteer_email" class="form-control" value="<?php echo set_value('volunteer_email',$volunteer_data['volunteer_email']); ?>"/><br />
                
                <label for="volunteer_phone_label">Teléfono</label>
                <input type="input" name="volunteer_phone" class="form-control" value="<?php echo set_value('volunteer_phone',$volunteer_data['volunteer_phone']); ?>"/><br />
                
                <label for="volunteer_profession_label">Profesión</label>
                <input type="input" name="volunteer_profession" class="form-control" value="<?php echo set_value('volunteer_profession',$volunteer_data['volunteer_profession']); ?>"/><br />
                
                <label for="volunteer_occupation_label">Ocupación</label>
                <input type="input" name="volunteer_occupation" class="form-control" value="<?php echo set_value('volunteer_occupation',$volunteer_data['volunteer_occupation']); ?>" /><br />
                
                <label for="volunteer_availability_label">Disponibilidad</label>
                <input type="input" name="volunteer_availability" class="form-control" value="<?php echo set_value('volunteer_availability',$volunteer_data['volunteer_availability']); ?>" /><br />
                
                <label for="volunteer_preferences_label" >Preferencias</label>
                <input type="input" name="volunteer_preferences" class="form-control" value="<?php echo set_value('volunteer_preferences',$volunteer_data['volunteer_preferences']); ?>"/><br />

                <label for="volunteer_experience_label" >Experiencia</label>
                <textarea name="volunteer_experience" rows="10" cols="50" class="form-control"><?php echo set_value('volunteer_experience',$volunteer_data['volunteer_experience']); ?></textarea><br />
                
            <?php endforeach; ?>


            <input type="submit" name="submit" value="Guardar" class="btn btn-primary"/>
            <a href="<?php echo base_url(); ?>volunteers"><button type="button" class="btn btn-primary">Volver</button></a>

        </form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    
</div>
</div> <!-- /container -->

