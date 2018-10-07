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
  <!-- <div class="container"> -->
      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand active" rel="home" href="#" title="ethiotelecom Task Managemnt system">
              <img style="width:100px; margin-top: -10px;"
              src="<?php echo base_url() ?>/assets/logo/etlogo.png">
              Task Management 
            </a>
            <a class="navbar-brand" href="<?php echo base_url() ?>home">Home</a>
            <a class="navbar-brand" href="<?php echo base_url() ?>task">Task</a>
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
                <li><a href="<?php echo base_url().'password';?>">Change Password</a></li>
                <?php
                if($this->session->userdata('role') =='admin'){?>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url().'password';?>">Reset Password</a></li>
                <?php
                }?>
              </ul>


            </li>
          </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    <!-- </div> -->
      

    