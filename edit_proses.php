<?php
if (isset($_POST['edit'])) {
  include("koneksi.php");

  $id = $_POST['id'];
	$nama	= $_POST['nama'];
	$notelepon	= $_POST['notelepon'];
	$email = $_POST['email'];

  $query  = "UPDATE bukutelepon SET ";
  $query .= "nama = '$nama', ";
  $query .= "notelepon='$notelepon', ";
  $query .= "email = '$email' ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

header("location:index.php");


?>
