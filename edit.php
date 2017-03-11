<?php
  include 'koneksi.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM bukutelepon WHERE id='$id'";
    $result = mysqli_query($link, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    $data = mysqli_fetch_assoc($result);
    $id = $data["id"];
    $nama = $data["nama"];
    $notelepon = $data["notelepon"];
    $email = $data["email"];

  } else {
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data Buku Telepon</legend>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>" required="yes">
          </p>
          <p>
            <label for="notelepon">No Telepon : </label>
            <input type="text" name="notelepon" id="notelepon" value="<?php echo $notelepon ?>" required="yes">
          </p>
          <p >
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" value="<?php echo $email ?>" required="yes">
          </p>
        </fieldset>
        <p>
          <input class="btn btn-success" type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>
