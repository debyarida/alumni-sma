<?php
//kelass untuk method-method yang akan dipanggil
require_once('koneksi.php');

class Aksi
{   

    private $conn;
   //insialisasi database,ketika kelass Aksi dipanggi maka otomatis database sudah terkoneksi 
    public function __construct()
    {
        $database = new koneksi();
        $db = $database->dbConnection();
        $this->conn = $db;
    }
    
    //method untuk menjalankan query
    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
    
    
    //method untuk melakukan login
    public function doLogin($username,$password)
    {
        try
        {
            $stmt = $this->conn->prepare("SELECT id, username, password FROM user WHERE username=:username");
            $stmt->execute(array(':username'=>$username));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount()  > 0 && $userRow['password'] == $password)
            {
                    $_SESSION['user_session'] = $userRow['id'];
					return true;
                  
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
			return false;
        }
		return false;
    }
    
    //method untuk cek user yang sudah login
    public function is_loggedin()
    {
        if(isset($_SESSION['user_session']))
        {
            return true;
        }
    }
    
    //method untuk memindahkan url
    public function redirect($url)
    {
        header("Location: $url");
    }
	
	//method untuk addDataAlumni
	 public function addAlumni($no_induk, $nama, $alamat, $thn_masuk, $jurusan, $thn_lulus, $no_hp)
    {
        $sql="SELECT * FROM input_alumni WHERE no_induk=$no_induk";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        echo"<script>alert('Data berhasil ditambahkan !');history.go(-1);</script>";
        $results=$stmt->fetch(PDO::FETCH_ASSOC);
        if(count($results) > 1){
            header('Location: http://localhost/alumni-sma/input_alumni.php?no_induk='.$no_induk);
            exit();
        }
        $sql="INSERT INTO input_alumni(no_induk, nama, alamat, thn_masuk, jurusan, thn_lulus, no_hp) VALUES ('$no_induk', '$nama', '$alamat', '$thn_masuk', '$jurusan', '$thn_lulus', '$no_hp' )";
        $stmt=$this->conn->prepare($sql);
         $results = $stmt->execute();
        if(!$results){
        return "Failed";
        }
        else{
        return "Success";
        }
    }
	
     public  function autoIdEvent()
       {
       

             $sql ="SELECT max(id) as last from input_event where id like 'eve_%' ";
             $stmt=$this->conn->prepare($sql);
             $stmt->execute();
             $data = $stmt->fetch(PDO::FETCH_ASSOC);
             $lastid=$data['last'];
             $nourut=(int)substr($lastid, 3,3);
             $kode = 0;
            if(empty($lastid))
            { 
               
                $nourut++;
                
                $idBaru = "eve_".sprintf("%06s", $nourut);
                $lastid=$idBaru;
            }
            else{
               
                
                    $lastid++;
                
            }
            
            return $lastid;
        }
		//method untuk addDataEvent
	 public function addEvent($id, $kegiatan, $hari, $tanggal, $jam, $tempat, $file)
    {
        $sql="SELECT * FROM input_event WHERE id='$id'";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        
        $results=$stmt->fetch(PDO::FETCH_ASSOC);
        if(count($results) > 1){
            header('Location: http://localhost/alumni-sma/input_event.php?id='.$id);
            exit();
        }
        $sql="INSERT INTO input_event(id, kegiatan, hari, tanggal, jam, tempat, file) VALUES ('$id', '$kegiatan', '$hari', '$tanggal', '$jam', '$tempat', '$file' )";
        $stmt=$this->conn->prepare($sql);
        $results = $stmt->execute();
    
        if(!$results){
        return "Failed";
        }
        else{
        return "Success";
        }
    }
  
}

?>