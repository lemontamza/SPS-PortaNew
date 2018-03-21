<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SPS-Portal</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="<?php echo base_url('asset')?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('asset')?>/css/navbar.css" rel="stylesheet">
    <link href="<?php echo base_url('asset')?>/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>

      <div class="container">

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
              <a class="navbar-brand" href="#"><img src="<?php echo base_url('images')?>/logosps-old.png" style="height: 100%;"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="<?=($this->uri->segment(2)==='index')?'active':''?>"><a href="<?php echo site_url('main/index')?>"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
                <li class="<?=($this->uri->segment(2)==='viewgpa')?'active':''?>"><a href="<?php echo site_url('main/viewgpa')?>" ><i class="fa fa-bar-chart" aria-hidden="true"></i> ตรวจสอบผลการเรียน</a></li>
                <li class="<?=($this->uri->segment(2)==='hotspot')?'active':''?>"><a href="<?php echo site_url('main/hotspot')?>" ><i class="fa fa-wifi" aria-hidden="true"></i> Hotspot Wifi</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.facebook.com/เล่าเรื่องสกลพัฒน์-655763477866443/" target="_blank"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a></li>
                <li><p class="navbar-text">Login Name</p></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
