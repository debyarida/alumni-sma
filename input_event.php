<?php include 'header2.php'; ?>
 
         <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Inputan Event</h3>
                </div><!-- /.box-header -->
				<br>
			    <br>
				<br>
				<br>
				<br>
                <form class="form-horizontal" action="simpan_event.php" method="post" enctype="multipart/form-data" required> 
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="inputTahun">Id:</label>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="id" value="<?php print ($auth_user->autoIdEvent());?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
        						  <label class="control-label col-xs-3" for="input_event">Kegiatan:</label>
        						  <div class="col-xs-3">
        							<input type="text" class="form-control" name="kegiatan" required>
        						  </div>
        						</div>
        						<div class="form-group">
        						  <label class="control-label col-xs-3" for="input_event">Hari Kegiatan:</label>
        						  <div class="col-xs-3">
        							<select class="form-control" name="hari" required>
                        <option selected disabled>Hari</option>
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                        <option>Minggu</option>
                      </select>
        						  </div>
        						</div>
      							<div class="form-group">
        						  <label class="control-label col-xs-3" for="input_event">Tanggal Kegiatan:</label>
        						  <div class="input-append date form_datetime col-xs-3"> 
                        <input type="text" class="form-control" id="tanggal" value="" name="tanggal" required >
                      </div>
        						</div>
      							<div class="form-group">
        						  <label class="control-label col-xs-3" for="input_event">Jam:</label>
                      <div class="input-group date col-xs-3">
                        <input type="text" class="form-control" id="jam" name="jam" value="" required>
                      </div>
                    </div>
      							<div class="form-group">
        						  <label class="control-label col-xs-3" for="input_event">Tempat:</label>
        						  <div class="col-xs-3">
        							<input type="text" class="form-control" name="tempat" required>
        						  </div>
        						</div>
      							<div class="form-group">
                      <label class="control-label col-xs-3" for="input_event">Poster Kegiatan:</label>
                      <div class="col-xs-3">
                        <input type="file" name="file" accept="image/*">
                      </div>
                    </div>
        						<div class="form-group">
        						  <div class="col-xs-offset-3 col-xs-9">
        							<input type="submit" name="Input" class="btn btn-default" value="Simpan">
        							<input type="reset" name="reset" class="btn btn-default" value="Reset"> &nbsp;&nbsp;
        						  </div>
        						</div>
      					</form>

						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						
                </div><!-- /.box-body -->
              </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $('#tanggal').datetimepicker({
          format: 'YYYY-MM-DD',
                });
        $('#jam').datetimepicker({
          format: 'HH:mm'
        });
      });
    </script>

<?php include 'footer.php'; ?>
	