<?php
session_start();//session dimulai
require_once("Aksi.php"); //panggil aksi

$login = new Aksi(); //buat kelas aksi dengan nama login

if($login->is_loggedin()!="") //jika sudah login
{
	$login->redirect('home-admin.php'); //maka ke halaman home
}

if(isset($_POST['username']) && isset($_POST['password']))//ketika login ditekan 
{
  $username = $_POST['username']; //form username disimpan ke variable username
  $password = $_POST['password']; //form password disimpan ke variable password
  
    if($login->doLogin($username,$password)){;//panggil method doLogin
		$login->redirect('home-admin.php');//redirect ke halaman index.php
	}else{
		$error = "Gagal Login. Username / Password salah";
	}
 }
 

    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<!-- General meta information -->
	<title>Login Admin</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<!-- // General meta information -->
	
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="./js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
	<!-- // Load stylesheets -->	
</head>
<body>

	<div id="wrapper">
		<div id="wrappertop">
			
		</div>

		
		<div id="wrappermiddle">

			<h2 class = "centered">Login Admin</h2>
			
			<form method="post">
			
			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
					<input type="text" name="username" id="url" placeholder="Username" required=" ">
					<img id="url_user" src="./images/mailicon.png" alt="">
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
					<input type="password" name="password" id="url" placeholder="Password" required=" ">
					<img id="url_password" src="./images/passicon.png" alt="">
				
				</div>

				<div id="password_inputright"></div>

			</div>

			<div id="submit">
			
		<?php
			
			if(isset($error)){
				echo '<div style="color: red">'.$error.'</div>';
			}
			?>
			
				<input type="image" src="./images/submit_hover.png" name="login" id="submit1" value="Sign In">
				<input type="image" src="./images/submit.png" name="login" id="submit2" value="Sign In">
			</div>

			</form>
		</div>

		<div id="wrapperbottom"></div>
		
		<div id="powered">
		<h5>Copyright 2016</h5>
		</div>
	</div>

</body>
</html>