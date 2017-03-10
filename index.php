<?php
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Tabel Buku Telepon</h1>
    <center><a href="input.php">Input Data &Gt; </a></center>
    <br/>
    <table border="1">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Telepon</th>
        <th>Email</th>
        <th>Pilihan</th>
      </tr>
      <?php
      $query = "SELECT * FROM bukutelepon ORDER BY id ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      $no = 1; //variabel untuk membuat nomor urut
      while($data = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[nama]</td>"; //menampilkan data nama
        echo "<td>$data[notelepon]</td>"; //menampilkan data notelepon
        echo "<td>$data[email]</td>"; //menampilkan data email
        echo '<td>
          <a href="edit.php?id='.$data['id'].'">Edit</a> /
          <a href="hapus.php?id='.$data['id'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
  </body>
</html>
