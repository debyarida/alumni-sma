<?php include 'header2.php'; ?>
		
<!DOCTYPE html>
<html>
  <head>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
 
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
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="proses.php">
                  Silakan Pilih File Excel: <input name="userfile" type="file">
                  <input name="upload" type="submit" value="Import">
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

     
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="dist/js/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <?php if (isset($_GET['no_induk'])) { ?>
       <script>alert("No Induk Siswa : <?=$_GET['no_induk']?> Sudah Ada");</script>
    <?php } ?>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
</html>
		
<?php include 'footer.php'; ?>
	