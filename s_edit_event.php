<?php  require_once("header2.php");
  
	$aksi = new Aksi();
				
		$id       = $_POST['id'];
      $kegiatan   = $_POST['kegiatan'];
      $hari       = $_POST['hari'];
      $tanggal    = $_POST['tanggal'];
      $jam      = $_POST['jam'];
      $tempat     = $_POST['tempat'];
    
          
    $imgFile = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];
    $imgSize = $_FILES['file']['size'];
		
    if($imgFile)
		{
			$upload_dir = 'files/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$file = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['file']);
					move_uploaded_file($tmp_dir,$upload_dir.$file);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$file = $edit_row['file']; // old image from database
		}
           
$sql="UPDATE input_event 
		SET  id = '$id',
			 kegiatan = '$kegiatan',
			 hari = '$hari',
			 tanggal = '$tanggal',
			 jam = '$jam',
			 tempat = '$tempat',
			 file = '$file'
		WHERE id= '$id' ";
$stat=$aksi->runQuery($sql);
$stat->execute();
	
	
?>

<script language="JavaScript">alert('Data Berhasil Di Ubah !');
document.location=('home-admin.php')</script>