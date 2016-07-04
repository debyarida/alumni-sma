<?php 
require_once 'koneksi.php';
/* ambil detail alumni dari NIM di databasae */
if(!isset($_GET['nim'])){
	echo '<h1>Page Not Found! Error 404</h1>';
	die();
}
$sql = "SELECT * FROM input_alumni WHERE no_induk=:nim";

$query = $conn->prepare($sql);

/* mengeksekusi masukan nim */
$query->execute([':nim'=>$_GET['nim']]);

$row = $query->fetch(PDO::FETCH_ASSOC);

if(!$row){
	echo '<h1>Page Not Found! Error 404</h1>';
	die();
}


include 'header1.php'; ?>
		
		<!-- ==== TEAM MEMBERS ==== -->
		<div class="container" id="detailalumni" name="detailalumni">
		<br>
		<!--JIKA DI SUMBIT-->
			<div class="row white">
			<br>
			<br>
		<table class="zebra-table">
			
			<br>
			<h1 class="centered">PROFIL SISWA</H1>
			<br>
			<tbody>
					<th width="200">Nama</th>
					<td>: <?= $row['nama'] ?></td> <!--pemanggilan fungsi diatas -->
				</tr>
				<tr>
					<th width="200">No Induk Siswa</th>
					<td>: <?= $row['no_induk'] ?></td>
				</tr>
				<tr>
					<th width="200">Jurusan</th>
					<td>: <?= $row['jurusan'] ?></td>
				</tr>
				<tr>
					<th width="200">Tahun Masuk</th>
					<td>: <?= $row['thn_masuk'] ?></td>
				</tr>				
				<tr>
					<th width="200">Alamat</th>
					<td>: <?= $row['alamat'] ?></td>
				</tr>
				<tr>
					<th width="200">Tahun Lulus</th>
					<td>: <?= $row['thn_lulus'] ?></td>
				</tr>
				<tr>
					<th width="200">No HP</th>
					<td>: <?= $row['no_hp'] ?></td>
				</tr>
			</tbody>	
						
		</table>
		
			</div> <!--END WHITE TRUE-->			
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
				
		</div><!-- row -->
		
<?php include 'footer.php'; ?>
