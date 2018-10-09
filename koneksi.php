<?php

 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "ta5";
 $con     = new mysqli($hostname, $username, $pass, $db);
 if($con==false){
  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $kelas = $_POST['kelas'];
  $jk = $_POST['jeniskelamin'];
  $fks = $_POST['fakultas'];
  $hobi = implode(",", $_POST['hobi']);
  $alamat = $_POST['alamat'];

 
 $sql="INSERT INTO ta5(nim,nama,kelas,jeniskelamin,fakultas,hobi,alamat) VALUES ('$nim','$nama','$kelas','$jk','$fks','$hobi','$alamat')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk";
   }else{
    echo "Database Tidak Dapat Masuk";
   }
}
 ?>