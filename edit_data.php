<?php
include 'koneksi.php';
    $id = $_POST['id'];
    $nama_karyawan   = $_POST['nama'];
    $skill    = $_POST['skill'];
    $foto = $_FILES['foto']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg');
  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto;
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
                  $query = "UPDATE datakaryawan SET nama = '$nama_karyawan', skill = '$skill', foto = '$nama_gambar_baru'";
                  $query .= "WHERE id = '$id'";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                  }

            } else {     
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit.php';</script>";
            }
} else {
    $query = "UPDATE datakaryawan SET nama = '$nama_karyawan', skill = '$skill'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
             " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
}