<?php
    include('koneksi.php')
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
<div class = "container-lg">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">Data Karyawan <span class="sr-only"></span></a>
      <a class="nav-link" href="tambah_karyawan.php">Tambah Data</a>
    </div>
  </div>
</nav>

<!-- 
<div class="text-center">
    <a class="btn btn-dark btn-lg btn-block mt-4" href="tambah_karyawan.php" role="button">Tambah Karyawan</a>
</div> -->


<table class = "table table-striped mt-4 align-middle">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Skill</th>
          <th>Foto</th>
          <th>Action</th>
        </tr>
    </thead>
<tbody>
      <?php
      $query = "SELECT * FROM datakaryawan ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1;
      while($row = mysqli_fetch_assoc($result))
      {
      ?>

       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['skill'];?></td>
          <td><img src="gambar/<?php echo $row['foto']; ?>" style="width: 120px;"></td>
          <td>
            <a class="btn btn-dark" href="edit.php?id=<?php echo $row['id']; ?>" role="button">EDIT</a>
            <a class="btn btn-dark" href="hapus_data.php?id=<?php echo $row['id']; ?>" role="button" onclick="return confirm('hapus Data ?')">HAPUS</a>
            </td>
      </tr>
         
      <?php
        $no++;
      }
      ?>
    </tbody>
</table>
</div>

</body>

</html>