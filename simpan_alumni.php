<?php
require_once ('Aksi.php');
			
			$aksi = new Aksi();
			
            
            $no_induk 	= $_POST['no_induk'];
			$nama 		= $_POST['nama'];
			$alamat 	= $_POST['alamat'];
            $thn_masuk 	= $_POST['thn_masuk'];
			$jurusan 	= $_POST['jurusan'];
            $thn_lulus 	= $_POST['thn_lulus'];
            $no_hp 		= $_POST['no_hp'];

            $add = $aksi->addAlumni($no_induk, $nama, $alamat, $thn_masuk, $jurusan, $thn_lulus, $no_hp);
 ?>

 <br/>
<script language="JavaScript">
document.location=('data_alumni.php')</script>