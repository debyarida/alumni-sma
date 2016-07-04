<?php  require_once("header2.php");
  
	$aksi = new Aksi();
				
			$no_induk 	= $_POST['no_induk'];
			$nama 		= $_POST['nama'];
			$alamat 	= $_POST['alamat'];
            $thn_masuk 	= $_POST['thn_masuk'];
			$jurusan 	= $_POST['jurusan'];
            $thn_lulus 	= $_POST['thn_lulus'];
            $no_hp 		= $_POST['no_hp'];
       
           
$sql="UPDATE input_alumni 
		SET  no_induk = '$no_induk',
			 nama = '$nama',
			 alamat = '$alamat',
			 thn_masuk = '$thn_masuk',
			 jurusan = '$jurusan',
			 thn_lulus = '$thn_lulus',
			 no_hp = '$no_hp'
		WHERE no_induk= '$no_induk' ";
$stat=$aksi->runQuery($sql);
$stat->execute();

?>

<script language="JavaScript">alert('Data Berhasil Di Ubah !');
document.location=('data_alumni.php')</script>