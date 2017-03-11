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
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data Buku Telepon</legend>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required="yes">
          </p>
          <p>
            <label for="notelepon">notelepon : </label>
            <input type="text" name="notelepon" id="notelepon" required="yes">
          </p>
          <p >
            <label for="email">email : </label>
            <input type="email" name="email" id="email" placeholder="Contoh: me@cs.ardi.my.id" required="yes">
          </p>

        </fieldset>
        <p>
          <input class="btn btn-success" type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
