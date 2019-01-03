<!DOCTYPE html><!--[if lt IE 7]><html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9"><![endif]--><!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="content-language" content="es-ES" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <?php /* ?>
  <link rel="shortcut icon" href="<?php echo $this->config->item('favicon'); ?>">
  <?php */ ?>
  <title><?php echo $page_title; ?></title>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
  <?php /* ?>
  <link href="<?php echo site_url('/template/css/bootstrap-v3.3.6.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo site_url('/template/css/reset.css'); ?>" rel="stylesheet">
  <?php */ ?>
  <link href="<?php echo site_url('/template/css/style.css'); ?>" rel="stylesheet">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>HERAS</h1>
    <p>Software para la Gestión de Asistencia Social Open SAMS</p>
  </div>

<div class="panel panel-default">
  <div class="panel-heading"><?php echo lang('login_heading');?></div>
    <div class="panel-body">
        <p><?php echo lang('login_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

        <?php echo form_open("auth/login");?>

          <p>
            <?php echo lang('login_identity_label', 'identity');?>
            <?php echo form_input($identity);?>
          </p>

          <p>
            <?php echo lang('login_password_label', 'password');?>
            <?php echo form_input($password);?>
          </p>

          <p>
            <?php echo lang('login_remember_label', 'remember');?>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
          </p>


          <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

        <?php echo form_close();?>

        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
      </div>
    </div>  
  </div>
</div>
<footer>
    <div class="well">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 text-left">
          <h6 class="text-muted lead">HERAS_open-sams.  </h6>
          <h6 class="text-muted">Contact information: <a href="mailto:bienvenido.espinosa@gmail.com"> Email us</a>.</h6>
        </div>


        <div class="col-xs-12 col-md-6 text-right">             
                <h6 class="text-muted lead">ENCUENTRANOS EN LAS REDES</h6>
                    <div class="redes-footer">
                       <a href="https://www.facebook.com/"><img src="imagenes/facebook-2.png"></a>
                   <a href="https://twitter.com/"><img src="imagenes/twitter-2.png"></a>
                   <a href="https://www.youtube.com/"><img src="imagenes/youtube-2.png"></a>
                    </div>
            </div>
          </div>
          <div class="row"> 
            <div class="col-md-12 text-right">
              <p class="text-muted small text-right">HERAS_open-sams @2019. License MIT.</p>
            </div>
      </div>
    </div>
    </div>
    
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
  <script>window.jQuery || document.write('<script src="<?php echo site_url('/template/js/jquery-v1.11.3.min.js') ?>"><\/script>')</script>
  <script src="<?php echo site_url('/template/js/bootstrap-v3.3.6.min.js') ?>"></script>
</body>
</html>