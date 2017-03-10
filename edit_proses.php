<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
	$nama	= $_POST['nama'];
	$notelepon	= $_POST['notelepon'];
	$email = $_POST['email'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE bukutelepon SET ";
  $query .= "nama = '$nama', ";
  $query .= "notelepon='$notelepon', ";
  $query .= "email = '$email' ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");


?>
