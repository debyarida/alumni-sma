<?php  
  //require_once("session.php");
  require_once("Aksi.php");
  $aksi = new Aksi();

$id=$_POST['id'];
$sql = "select file from input_event where id = '$id' ";
$stat=$aksi->runQuery($sql);
$stat->execute();

$row = $stat->fetch(PDO::FETCH_OBJ);



?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
                <div class="box-body">
                  <img src="files/<?php echo $row->file;?>" width="550" height="500">
          </div>
                     
                
                
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
</body>
</html>