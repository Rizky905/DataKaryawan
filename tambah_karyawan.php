<?php
  include('koneksi.php'); 
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="styleseet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
  <body>
    <div class="container">

    <form method="POST" action="tambah_data.php" enctype="multipart/form-data" >
      <section class="base">
        <div class="form-group mt-2">
          <label>Nama Karyawan</label>
          <input type="text" class="form-control" name="nama"/>
        </div>
        <div class="form-group mt-2">
          <label>Skill Karyawan</label>
          <input type="text" class="form-control" name="skill" autofocus="" required="" />
        </div>
        <div class="form-group mt-4">
          <label for="tambah_foto">Upload foto</label>
          <input type="file" class="form-control-file" name="foto">
        </div>
        <div class="text-center mt-4">
         <button class="btn btn-dark" type="submit">Simpan</button>
        </div>
        </section>
      </form>
    </div>
  </body>
</html>