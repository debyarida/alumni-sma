<?php
require_once('session.php');
require_once('Aksi.php');

  $auth_user = new Aksi(); //buat kelas aksi dengan nama auth_user
  $user_id = $_SESSION['user_session'];//user_session disimpan di variable user_id
  $stmt = $auth_user->runQuery("SELECT * FROM user WHERE id=:id");//query untuk mengambil semua nilain dari table use yang ditentuka dengan id
  $stmt->execute(array(":id"=>$user_id));//execute query
  $userRow=$stmt->fetch(PDO::FETCH_OBJ);//ambil data kemudian disimpan di userRow
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PORTAL ALUMNI - SMA Negeri 14 Semarang">
    <meta name="author" content="DLN-UDINUS">


    <title>PORTAL ALUMNI</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
  <style>body{font-family: Arial !important;}</style>
 
    <!--link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'-->
    
    <script src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
  
  <link rel="stylesheet" type="text/css" href="datatable/datatables.css">
  <script type="text/javascript" charset="utf8" src="datatable/datatables.js"></script>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="assets/img/UndipKecil.png">
          </button>
        </div>
        <div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li> <a href="home-admin.php" class="smoothScroll">Home</a></li>
        <li> <a href="data_alumni.php" class="smoothScroll">Data Alumni</a></li> 				
				<li> <a href="import.php" class="smoothScroll">Import</a></li>
				<li> <a href="input_event.php" class="smoothScroll">Input Kegiatan</a></li>
        <li> <a href="logout.php" class="smoothScroll">Logout</a></li>
			</ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
  