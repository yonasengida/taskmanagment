<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="">

    <title>etTMS</title>
    <link href="<?php echo base_url('assets/datatables.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker.min.css') ?>" rel="stylesheet">
       
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
       
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>


</head>
<body>
  <div class="container">
  <div class="container box ">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="home" href="#" title="ethiotelecom Task Managemnt system">
              <img style="max-width:100px; margin-top: -7px;"
              src="<?php echo base_url() ?>/assets/etlogo.png">
            </a>
            <a class="navbar-brand" href="#">Task Managment System[Managment Instance]</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <!--<li class="active"><a href="#">Task</a></li>-->
             
            </ul>
             <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li> <a><?php echo $this->session->userdata('full_name')?></a></li>
                 <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url().'auth/logout';?>">Logout</a></li>
                <li role="separator" class="divider"></li>
                <!--<li><a href="<?php echo base_url().'user/passwordChange';?>">Change Password</a></li>-->

              </ul>


            </li>
          </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div>
      

    