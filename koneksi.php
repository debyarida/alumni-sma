<?php

class koneksi
{   
    private $servername = "localhost";
	private $db_name = "alumni";
    private $username = "root";
    private $password = "";
    public $conn;
     
    public function dbConnection()
    {
     
        $this->conn = null;    
        try {
		$this->conn = new PDO("mysql:host=" . $this-> servername . ";dbname=" . $this->db_name, $this->username, $this->password);
		// set the PDO error mode to exception
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
	catch(PDOException $e)
    {
		echo '<h1 align="center">Mohon Maaf Koneksi Ke Database Gagal. Silahkan hubungi Administrator</h1>';
    exit();
    }
         
        return $this->conn;
    }
}

$servername = "localhost";
$db_name = "alumni";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=" . $servername . ";dbname=" . $db_name, $username, $password);
?> 