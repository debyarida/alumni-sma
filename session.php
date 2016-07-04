<?php
	//untuk session
	session_start();//session dimulai
	
	require_once 'Aksi.php';//panggil kelass aksi
	$session = new Aksi(); //buat kelas aksi dengan nama session
	
	// if user session is not active(not loggedin) this page will help 'home.php and profile.php' to redirect to login page
	// put this file within secured pages that users (users can't access without login)
	
	if(!$session->is_loggedin()) //kondisi dimana tidak terjadi login 
	{
		
		$session->redirect('index.php'); //maka session di redirect ke index
	}
?>