<?php $this->load->helper('html');?>
<div class="form">
<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
  <meta name="description" content="Bootstrap Metro Dashboard">
  <meta name="author" content="Dennis Ji">
  <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <!-- end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: CSS -->
  <?php echo link_tag('public/css/bootstrap.min.css')?>
  <?php echo link_tag('public/css/bootstrap-responsive.min.css')?>
  <?php echo link_tag('public/css/style.css')?>
  <?php echo link_tag('public/css/style-responsive.css')?>
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
  <!-- end: CSS -->
  

  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
  <![endif]-->
  
  <!--[if IE 9]>
    <link id="ie9style" href="css/ie9.css" rel="stylesheet">
  <![endif]-->
    
  <!-- start: Favicon -->
  <?php echo link_tag('public/img/favicon.ico')?>
  <!-- end: Favicon -->
  
      <style type="text/css">
      body { background: url(http://localhost/CI/public/img/bg-login.jpg) !important; }
    </style>
    
    
    
</head>

<body>
<?php echo validation_errors(); ?>

      <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>
    <div class="container-fluid-full">
    <div class="row-fluid">
          
      <div class="row-fluid">
        <div class="login-box">
          <div class="icons">
            <a href="index.html"><i class="halflings-icon home"></i></a>
            <a href="#"><i class="halflings-icon cog"></i></a>
          </div>
          <h2>Login to your account</h2>
          <form class="form-horizontal" action="index.html" method="post">
            <fieldset>
              
              <div class="input-prepend" title="Username">
                <span class="add-on"><i class="halflings-icon user"></i></span>
                <input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>
              </div>
              <div class="clearfix"></div>

              <div class="input-prepend" title="Password">
                <span class="add-on"><i class="halflings-icon lock"></i></span>
                <input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
              </div>
              <div class="clearfix"></div>
              
              <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

              <div class="button-login">  
                <button type="submit" id="btn_login" class="btn btn-primary">Login</button>
              </div>
              <div class="clearfix"></div>
          </form>
          <hr>
          <h3>Forgot Password?</h3>
          <p>
            No problem, <a href="#">click here</a> to get a new password.
          </p>  
        </div><!--/span-->
      </div><!--/row-->
      

  </div><!--/.fluid-container-->
  
    </div><!--/fluid-row-->
  
  <!-- start: JavaScript-->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js" ></script>
    <script src="public/js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery-migrate-1.0.0.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery-ui-1.10.0.custom.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.ui.touch-punch.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/modernizr.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/bootstrap.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.cookie.js"></script>
  
    <script src='public/js/fullcalendar.min.js'></script>
  
    <script src='public/js/jquery.dataTables.min.js'></script>

    <script type="text/javascript" src="<?php echo base_url();?> public/js/excanvas.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.flot.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.flot.resize.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.chosen.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.uniform.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.cleditor.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.noty.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.elfinder.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.raty.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.iphone.toggle.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.uploadify-3.1.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.gritter.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.imagesloaded.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.masonry.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.knob.modified.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/jquery.sparkline.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/counter.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url();?> public/js/retina.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?> public/js/custom.js"></script>
  <!-- end: JavaScript-->
  </form>
</body>

</html>
