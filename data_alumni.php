<?php include 'header2.php'; ?>
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
                <th>Aksi</th>

              </tr>
	        </thead>
			<?php 
				$sql=("SELECT no_induk, nama, alamat, thn_masuk, jurusan, thn_lulus, no_hp FROM `input_alumni` ORDER BY `no_induk` DESC");
				$query=$auth_user->runQuery($sql);
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
			  <td><a href="" class="edit" data-id="<?php echo $no_induk;?>">Edit</a>  | <a href="hapus_alumni.php?id=<?php echo $no_induk; ?>"> Hapus</a> </td>
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

	<!-- Modal  Edit data -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
        </div> 
        <script>
        $(function(){
          $(document).on('click','.edit',function(e){
                e.preventDefault();
                $("#myModal2").modal('show');
                $.post('edit_alumni.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
	<script> 
			$(document).ready( function () {
				$('#example').DataTable();
			});
	</script>
<?php  
include 'footer.php';?>