<?php
include 'koneksi.php';

if (isset($_POST['input'])) {

  $nama = $_POST['nama'];
  $notelepon = $_POST['notelepon'];
  $email = $_POST['email'];

  $query = "INSERT INTO bukutelepon VALUES (NULL, '$nama', '$notelepon','$email')";
  $result = mysqli_query($link, $query);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

header("location:index.php");
?>
