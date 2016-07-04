<?php

	
	include 'header2.php';
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $conn->prepare('SELECT id, kegiatan, hari, tanggal, jam, tempat, file FROM `input_event`  WHERE id =:id');
		$stmt_edit->execute(array(':id'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: home-admin.php");
	}

	if(isset($_POST['Input']))
	{
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
		}
		else
		{
			// if no image selected the old image remain as it is.
			$file = $edit_row['file']; // old image from database
		}	
						
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $conn->prepare('UPDATE input_event 
									     SET kegiatan=:kegiatan, 
										     hari=:hari,
										     tanggal=:tanggal,
										     jam=:jam,
										     tempat=:tempat,
										     file=:file
								       WHERE id=:id');
			$stmt->bindParam(':kegiatan',$kegiatan);
			$stmt->bindParam(':hari',$hari);
			$stmt->bindParam(':tanggal',$tanggal);
			$stmt->bindParam(':jam',$jam);
			$stmt->bindParam(':tempat',$tempat);
			$stmt->bindParam(':file',$file);
			$stmt->bindParam(':id',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='home-admin.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}
		
		}
		
	}
	
?>
	
   
    <br>
    <br>
    <br>
    <br>
    <br>
	<form class="form-horizontal" method="post" enctype="multipart/form-data" required> 
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="inputTahun">Id:</label>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="id" value="<?php echo $id;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_event">Kegiatan:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="kegiatan" value="<?php echo $kegiatan;?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_event">Hari Kegiatan:</label>
                      <div class="col-xs-3">
                      <select class="form-control" name="hari" required>
                        <option selected><?php echo $hari;?></option>
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                        <option>Minggu</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_event">Tanggal Kegiatan:</label>
                      <div class="input-append date form_datetime col-xs-3"> 
                        <input type="text" class="form-control" id="tanggal" value="<?php echo  $tanggal;?>" name="tanggal" required >
                      </div>
                    </div>
                   <div class="form-group">
                      <label class="control-label col-xs-3" for="input_event">Jam:</label>
                      <div class="input-group date col-xs-3">
                        <input type="text" class="form-control" id="jam" name="jam" value="<?php echo  $jam;?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_event">Tempat:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="tempat" value="<?php echo $tempat;?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_event">Poster Kegiatan:</label>
                      <div class="col-xs-3">
                        <p><img src="files/<?php echo $file; ?>" height="150" width="150" /></p>
                        <input class="input-group" type="file" name="file" accept="image/*" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-offset-3 col-xs-9">
                      <input type="submit" name="Input" class="btn btn-default" value="Simpan">
                      <input type="reset" name="reset" class="btn btn-default" value="Reset"> &nbsp;&nbsp;
                      </div>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $('#tanggal').datetimepicker({
          format: 'YYYY-MM-DD',
                });
        $('#jam').datetimepicker({
          format: 'HH:mm'
        });
      });
    </script>
    
<?php include 'footer.php'; ?>