<?php include 'header2.php';

  $aksi = new Aksi();
$id=$_POST['id'];
$stat=$aksi->runQuery("select * from input_alumni where no_induk='$id' ");
$stat->execute();

$row = $stat->fetch(PDO::FETCH_OBJ);
?>

                <br>
                <br>
                <br>
                <br>
               <form class="form-horizontal" action="s_edit_alumni.php" method="post" required>  
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_alumni">No Induk:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="no_induk" maxlength="5" value="<?php echo $row->no_induk; ?>"required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_alumni">Nama:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="nama" maxlength="30" value="<?php echo $row->nama;?>" required>
                      </div>
                    </div>                  
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_alumni">Alamat:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="alamat" maxlength="50" value="<?php echo $row->alamat;?>"required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_alumni">Tahun Masuk:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="thn_masuk" maxlength="4" value="<?php echo $row->thn_masuk;?>"required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_alumni">Jurusan:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="jurusan" maxlength="20" value="<?php echo $row->jurusan;?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_alumni">Tahun Lulus:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="thn_lulus" maxlength="4" value="<?php echo $row->thn_lulus;?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-3" for="input_alumni">No HP:</label>
                      <div class="col-xs-3">
                      <input type="text" class="form-control" name="no_hp" maxlength="12" value="<?php echo $row->no_hp;?>" required>
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

    <script src="assets/js/moment.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $('#tanggal').datetimepicker({
          format: 'YYYY-MM-DD',
                });
        $('#jam').datetimepicker({
          format: 'hh:mm:ss',
        });
      });
    </script>
    <script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
    
<?php include 'footer.php'; ?>