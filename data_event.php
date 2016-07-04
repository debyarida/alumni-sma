<?php include 'header1.php'; ?>

<!-- ==== HEADERWRAP ==== -->
		<div class="row white centered">
			<header class="container" id="Home">
					<br>
					<br>
					<br>
					<br>
						
						<h1 class="centered">KEGIATAN ALUMNI</h1>
						<br>
						<br>
							<table class="table table-bordered table-striped table-hover" id="example">
								<thead>
					              <tr>
					                <th>no</th>
					                <th>ID</th>
					                <th>Kegiatan</th>
					                <th>Hari </th>
					                <th>Tanggal</th>
					                <th>Jam</th>
					                <th>Tempat</th>
					                <th>File</th>
					               </tr>
						        </thead>
								<?php 
									$sql=("SELECT id, kegiatan, hari, tanggal, jam, tempat, file FROM `input_event` ORDER BY `id` DESC");
									$query = $conn->prepare($sql);
									$query->execute();
									$no=0; //variabel no untuk nomor urutnya.
									while($tampil=$query->fetch()){
									$id=$tampil['id'];
									$kegiatan=$tampil['kegiatan'];
									$hari=$tampil['hari'];
									$tanggal=$tampil['tanggal'];
									$jam=$tampil['jam'];
									$tempat=$tampil['tempat'];
									$file=$tampil['file'];
									$no++; // ini sama saja dengan $no = $no + 1
								?>
								<tbody>
								  <tr>
								  <td><?php echo $no;?></td>
								  <td><?php echo $id;?></td>
								  <td><?php echo $kegiatan;?></td>
								  <td><?php echo $hari;?></td>
								  <td><?php echo $tanggal;?></td>
								  <td><?php echo $jam;?></td>
								  <td><?php echo $tempat;?></td>
								  <td><a href="#" data-id="<?php echo $id;?>" class="detail"> <?php echo $file;?> </a> </td>
								  </tr>
								</tbody>
								<?php } ?>
							</table>
					<br>
					<br>
			</header>

	    </div><!-- /headerwrap -->
		</br></br></br>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        
                    </div>
                    <div class="modal-body">
                    </div>
                    
                </div>
            </div>
        </div>
        <script> 
			$(document).ready( function () {
				$('#example').DataTable();
			});

			$(document).on('click','.detail',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('show_image.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
	</script>
<?php include 'footer.php'; ?>	
  		
