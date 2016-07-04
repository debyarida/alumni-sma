<?php include 'header1.php'; ?>
<!-- tampilan web -->
		<div class="container" id="About" name="About">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table class="table table-bordered table-striped table-hover" id="example">
			<thead>
              <tr>
                <th>No</th>
                <th>No Induk Siswa</th>
                <th>Nama </th>
                <th>Alamat</th>
                <th>Tahun Masuk</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>No HP</th>
              </tr>
	        </thead>
			<?php 
				$sql=("SELECT no_induk, nama, alamat, thn_masuk, jurusan, thn_lulus, no_hp FROM `input_alumni`");
				$query = $conn->prepare($sql);
				$query->execute();
				$no=0; //variabel no untuk nomor urutnya.
				while($tampil=$query->fetch()){
				$no_induk=$tampil['no_induk'];
				$nama=$tampil['nama'];
				$alamat=$tampil['alamat'];
				$thn_masuk=$tampil['thn_masuk'];
				$jurusan=$tampil['jurusan'];
				$thn_lulus=$tampil['thn_lulus'];
				$no_hp=$tampil['no_hp'];
				$no++; // ini sama saja dengan $no = $no + 1
			?>
			<tbody>
			  <tr>
			  <td><?php echo $no;?></td>
			  <td><?php echo $no_induk;?></td>
			  <td><?php echo $nama;?></td>
			  <td><?php echo $alamat;?></td>
			  <td><?php echo $thn_masuk;?></td>
			  <td><?php echo $jurusan;?></td>
			  <td><?php echo $thn_lulus;?></td>
			  <td><?php echo $no_hp;?></td>
			  </tr>
			</tbody>
			<?php } ?>
		</table>
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
		<br>
		<br>
		<br>
		<br>

	<script> 
			$(document).ready( function () {
				$('#example').DataTable();
			});
	</script>
<?php  
include 'footer.php';?>