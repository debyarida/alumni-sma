<?php  require_once("header2.php");
  
$aksi = new Aksi();
$id = $_GET['id'] ;
           
$sql="DELETE FROM input_alumni WHERE no_induk= '$id' ";
$stat=$aksi->runQuery($sql);
$stat->execute();

?>

<script language="JavaScript">alert('Data Berhasil Di Hapus !');
document.location=('data_alumni.php')</script>