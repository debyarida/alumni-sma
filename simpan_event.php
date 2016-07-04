<?php

require_once ('Aksi.php');
      $aksi = new Aksi();
      //if($_POST['Input'])
    //{
      
      $id       = $_POST['id'];
      $kegiatan   = $_POST['kegiatan'];
      $hari       = $_POST['hari'];
      $tanggal    = $_POST['tanggal'];
      $jam      = $_POST['jam'];
      $tempat     = $_POST['tempat'];
    
          
    $imgFile = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];
    $imgSize = $_FILES['file']['size'];
    
    
      $upload_dir = 'files/'; // upload directory
  
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    
      // valid image extensions
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    
      // rename uploading image
      $file = rand(1000,1000000).".".$imgExt;
        
      // allow valid image file formats
      if(in_array($imgExt, $valid_extensions)){     
        // Check file size '5MB'
        if($imgSize < 5000000)        {
          move_uploaded_file($tmp_dir,$upload_dir.$file);
        }
        else{
          $errMSG = "Sorry, your file is too large.";
        }
      }
      $add = $aksi->addEvent($id, $kegiatan, $hari, $tanggal, $jam, $tempat, $file);

 ?>

 <br/>
<script language="JavaScript">
document.location=('home-admin.php')</script>