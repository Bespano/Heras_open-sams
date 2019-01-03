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
      <a class="navbar-brand" href="<?php echo base_url();?>index">Asistencia Social</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        
        <li <?php if ($menu_active=='activity') { ?> class="active" <?php }?> ><a href="<?php echo base_url(); ?>activity">Actividad</a></li>
        <li <?php if ($menu_active=='volunteers') { ?> class="active" <?php }?> ><a href="<?php echo base_url(); ?>volunteers">Voluntarios</a></li>
        <li <?php if ($menu_active=='pantry') { ?> class="active" <?php }?> ><a href="<?php echo base_url();?>pantry">Despensa</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li<?php if ($menu_active=='administration') { ?> class="active" <?php }?> ><a href="<?php echo base_url(); ?>administration">Categorías y Subcategorías</a></li>
            <li><a href="#">Usuarios</a></li>
            <li <?php if ($menu_active=='modules') { ?> class="active" <?php }?> ><a href="<?php echo base_url(); ?>administration/get_modules_list">Módulos</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
<!-- User Account -->
      <span class="navbar-text pull-center">
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
                                            
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('auth/logout'); ?>" ><?php echo 'Log_out'; ?></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>


      </span>



    </div><!--/.nav-collapse -->
  </div>
</nav>
</header>
