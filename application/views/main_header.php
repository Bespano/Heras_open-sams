<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
 <header class="header">
                <a href="<?php echo site_url('index'); ?>" class="logo">
                    <span class="logo-mini"><b>A</b><?php echo "title_mini";//$title_mini; ?></span>
                    <span class="logo-lg"><b>Admin</b><?php echo "title_lg";//$title_lg; ?></span>
                </a>

                <!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">Asistencia Social</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li ><a href="index">Inicio</a></li>
        <li class="active"><a href="activity">Actividad</a></li>
        <li><a href="volunteers">Voluntarios</a></li>
        <li><a href="pantry">Despensa</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Salud</a></li>
            <li><a href="#">Educación</a></li>
            <li><a href="#">Carcelario</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>


<!-- User Account -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                                    
                                    
                                    Usuario<span class="glyphicon glyphicon-user hidden-xs user-image" alt="User Menu"></span> 
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="<?php echo 'm_001.png';//base_url($avatar_dir . '/m_001.png'); ?>" class="img-circle" alt="User Image">
                                        <p><?php echo 'firstname'; ?><small><?php echo lang('header_member_since'); ?> <?php echo date('d-m-Y', '15659856'); ?></small></p>
                                    </li>
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo 'auth/users/profile/id'; ?>"><?php echo 'header_profile'; ?></a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('auth/logout'); ?>" ><?php echo 'Log_out'; ?></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>




      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
</header>
