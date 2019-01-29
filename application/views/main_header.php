<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<header class="header">
<nav class="navbar navbar-default navbar-fixed-left ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>index">HERAS</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        
        <li <?php if ($menu_active=='activity') { ?> class="active" <?php }?> ><a href="<?php echo base_url(); ?>activity">Actividad</a></li>
        <li <?php if ($menu_active=='volunteers') { ?> class="active" <?php }?> ><a href="<?php echo base_url(); ?>volunteers">Voluntarios</a></li>
        <li <?php if ($menu_active=='pantry') { ?> class="active" <?php }?> ><a href="<?php echo base_url();?>pantry">Despensa</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if ($menu_active=='administration') { ?> class="active" <?php }?> ><a href="<?php echo base_url(); ?>administration">Categorías y Subcategorías</a></li>
            <li <?php if ($menu_active=='administration') { ?> class="active" <?php }?> ><a href="<?php echo base_url(); ?>administration">Áreas</a></li>
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
      <ul class="nav navbar-nav navbar-right">
      <span class="navbar-text">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                <span class="glyphicon glyphicon-user hidden-xs user-image" alt="User Menu"></span> Usuario
            </a>
            <ul class="dropdown-menu">              
               <li >                    
                    <div class="pull-center">
                        <a href="<?php echo site_url('auth/logout'); ?>" ><button type="button" class="btn btn-default">Salir</button></a>
                    </div>
                </li>
            </ul>
        </li>

      </span>
    </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
</header>


