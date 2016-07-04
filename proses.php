<?php
// menggunakan class phpExcelReader
include "excel_reader2.php";
//include "koneksi.php";
mysql_connect('localhost', 'root', '');
mysql_select_db('alumni');


// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++)
{
  // membaca data nim (kolom ke-1)
  $no_induk = $data->val($i, 1);
  // membaca data nama (kolom ke-2)
  $nama = $data->val($i, 2);
  // membaca data alamat (kolom ke-3)
  $alamat = $data->val($i, 3);

  $thn_masuk = $data->val($i, 4);

  $jurusan = $data->val($i, 5);
  $thn_lulus = $data->val($i, 6);
  $no_hp = $data->val($i, 7);




  // setelah data dibaca, sisipkan ke dalam tabel mhs
  $query = "INSERT INTO input_alumni (no_induk, nama, alamat, thn_masuk, jurusan, thn_lulus, no_hp) VALUES ('$no_induk', '$nama', '$alamat', '$thn_masuk', '$jurusan', '$thn_lulus', '$no_hp')";

  $hasil = mysql_query($query);
  

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  if ($hasil) $sukses++;
  else $gagal++;
}

// tampilan status sukses dan gagal
echo "<h3>Proses import data selesai.</h3>";
echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
echo "Jumlah data yang gagal diimport : ".$gagal."</p>";



?> 
