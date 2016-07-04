<?php //require_once 'koneksi.php';
$con = mysqli_connect('localhost','root','');
if($con){
	if(!mysqli_select_db($con, 'alumni')){
		die('Could not select DB');
	}
}else{
	die('Could not Connect DB');
}
?>
<?php include 'header.php'; ?>
		
		<!-- ==== TEAM MEMBERS ==== -->
		<div class="container" id="TrackingAlumni" name="TrackingAlumni">
		<br>
		<br>
		<br>
		<br>
		<?php if(isset($_FILES['file'])){
			$s = 0;
			$e = 0;
			
			$file = $_FILES['file']['tmp_name'];
			//$file= fopen($file, "r");
						
						
			$row = 1;
			if (($handle = fopen($file, "r")) !== FALSE) {
				set_time_limit(0);
				while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
					
				$d = [];
				foreach($data as $k=>$v){
					$d[$k] = mysql_real_escape_string($v);
				}
				$data = $d;
				
				$sql = "INSERT INTO trlsm  (`NIMHSTRLSM`, `NMMHSTRLSM`, `TPLHRTRLSM`,`TGLHRTRLSM`, `KDJEKTRLSM`, `TGMSKTRLSM`, `TGLLSTRLSM`, `LLSKETRLSM`, `NLIPKTRLSM`, `THSTDTRLSM`, `BLSTDTRLSM`, `HRSTDTRLSM`, `NMORTTRLSM`, `ALAMTRLSM`, `KDKOTTRLSM`, `KDPROTRLSM`, `NOTELTRLSM`, `NOHPETRLSM`, `SKRIPTRLSM`, `PEMB1TRLSM`, `PEMB2TRLSM`, `PHOTOTRLSM`, `WSDKETRLSM`, `WSDTHTRLSM`, `PREDITRLSM`, `SKRETTRLSM`, `TGRETTRLSM`, `NOIJFTRLSM`, `NOIJUTRLSM`, `TOEFLTRLSM`, `KURSITRLSM`, `KDPSTTRLSM`, `KDJENTRLSM`, `JCUTITRLSM`, `STWSDTRLSM`, `THP1`, `THP2`, `THP3`, `THP4`, `KESANTRLSM`, `TAHUNMSMHS`) VALUES ( '".$data[0]."', '".$data[1]."','".$data[2]."', '".$data[3]."','".$data[4]."','".$data[5]."', '".$data[6]."', '".$data[7]."', '".$data[8]."', '".$data[8]."', '".$data[9]."', '".$data[10]."', '".$data[11]."', '".$data[12]."', '".$data[13]."', '".$data[14]."', '".$data[15]."', '".$data[16]."', '".$data[17]."', '".$data[18]."', '".$data[19]."', '".$data[20]."', '".$data[21]."', '".$data[22]."', '".$data[23]."', '".$data[24]."', '".$data[25]."', '".$data[26]."', '".$data[27]."', '".$data[28]."', '".$data[29]."', '".$data[30]."', '".$data[31]."', '".$data[32]."', '".$data[33]."', '".$data[34]."', '".$data[35]."', '".$data[36]."', '".$data[37]."', '".$data[38]."', '".$data[39]."')";
					
					
					if(mysqli_query($con, $sql)){
						$s++;
					}else{
						$e++;
						echo mysqli_error($con);
						exit();
					}
				}
				fclose($handle);
			}
			
			echo 'Data Upload Sukses : '.$s.'x | Error : '.$e.'x';
		}?>
		<?php if(isset($_POST['submit'])){ ?>
		<!--JIKA DI SUMBIT-->
			<div class="row white">
				<br>
				<br>
				<form action="input.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
					Pilih file CSV yang akan di input: <br> 
					<input type="file" name="file"/>
					<input type="submit" name="input" value="Submit" />
					<br>
					<br>
					<br>
				   </form><!-- form -->
				<?php
				$page = 1;
				if(isset($_GET['page'])){
					$page = $_GET['page'];
				}
				?>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div> <!--END WHITE TRUE-->
		<?php }else{ ?>
			<div class="row white centered">
				<br>
				<br>
				<span class="icon-stats-up" style="font-size:80px;"></span>
				<h1 class="centered">Input Database</h1>
				<hr>
				Input Database Alumni SD Islam Sultan Agung 01 Semarang<br>
				Silahkan masukkan file <br>
				<br>
				<br>
				<div class="col-md-6 col-md-offset-3">
						<form class ="form-horizontal" role="form" method="POST" action="?page=2">
						  
						  <div class="form-group">
							  <input type="submit" class="btn btn-info" role="button" value="Browse" name="submit">
						      <!--<button type="submit" class="btn btn-lg btn-success"><i class="icon-search"></i> Search</button>-->
						  </div>
					   </form><!-- form -->
				</div>			
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div><!-- col-lg-3 -->
		<?php } ?>
				
		</div><!-- row -->
		
<?php include 'footer.php'; ?>
