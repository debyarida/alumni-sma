<?php require_once 'koneksi.php';?>
<?php include 'header1.php'; ?>
		
		<!-- ==== TEAM MEMBERS ==== -->
		<div class="container" id="TrackingAlumni" name="TrackingAlumni">
		<br>
		<?php if(isset($_POST['submit'])){ ?>
		<!--JIKA DI SUMBIT-->
			<div class="row white">
				<br>
				<br>
				<form class ="form-horizontal" role="form" method="POST" action="?page=2">
					  <div class="form-group">
						<label for="inputEmail1" class="col-lg-4 control-label"></label>
						  <input type="text" name="search" class="form-control input-lg text-center" id="inputEmail1" placeholder="Nama / NIM / Tahun Lulus ">
					  </div>
					  <div class="form-group">
						  <input type="submit" class="btn btn-info" role="button" value="Submit" name="submit">
						  <!--<button type="submit" class="btn btn-lg btn-success"><i class="icon-search"></i> Search</button>-->
					  </div>
				   </form><!-- form -->
				<?php
				$page = 1;
				if(isset($_GET['page'])){
					$page = $_GET['page'];
				}
				$search = $_POST['search'];
				$sql = "SELECT `no_induk`,`nama`,`alamat`,`thn_lulus` FROM `input_alumni` WHERE `nama` LIKE '%$search%' OR `no_induk` = '$search' OR `thn_lulus` = '$search'";
				$result = $conn->query($sql);
				if ($result->rowCount() > 0) { ?>
					<p align="left">Pencarian dengan Keyword "<?php echo $search ?>" menghasilkan <?php echo $result->rowCount()?> hasil pencarian :
					<table class="table table-bordered table-striped table-hover display" id="example">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Tahun Lulus , Alamat</th>
						</tr>
					</thead>
					<tbody>
					<?php // output data of each row
					while($row = $result->fetch()) {
						echo "<tr><td><h4><strong><a href='detailalumni.php?nim=".$row['no_induk']."'>".$row['nama']."</a></strong></td><td><small>Lulus : ".$row['thn_lulus'].", Alamat :".$row['alamat']."</small></h4></td></tr>";
					}
					?>
					</tbody>
					</table>
					
		<script> 
				$(document).ready( function () {
					$('#example').DataTable();
				});
		</script>
					<?php
				} else {
					echo "MAAF DATA TIDAK DITEMUKAN";
				}
				$conn = null;
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
				<h1 class="centered">Tracking Alumni</h1>
				<hr>
				Pencarian Data Alumni SMA Negeri 14 Semarang<br></br>
				Silahkan masukan Kata kunci <br>
				<b>Nama Alumni</b> atau <b>Tahun Lulus</b> untuk pencarian
				<br>
				<br>
				<div class="col-md-6 col-md-offset-3">
						<form class ="form-horizontal" role="form" method="POST" action="?page=2">
						  <div class="form-group">
						    <label for="inputEmail1" class="col-lg-4 control-label"></label>
						      <input type="text" name="search" class="form-control input-lg text-center" id="inputEmail1" placeholder="Nama / Tahun Lulus">
						  </div>
						  <div class="form-group">
							  <input type="submit" class="btn btn-info" role="button" value="Submit" name="submit">
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
				<br>
				<br>
			</div><!-- col-lg-3 -->
		<?php } ?>
				
		</div><!-- row -->
		
<?php include 'footer.php'; ?>
