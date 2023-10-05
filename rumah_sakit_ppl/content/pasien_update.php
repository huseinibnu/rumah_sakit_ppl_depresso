<?php 
  if(!defined('INDEX')) die ("");

  $foto = $_FILES['foto']['name'];
  $lokasi = $_FILES['foto']['tmp_name'];
  $tipefile = $_FILES['foto']['type'];
  $ukuranfile = $_FILES['foto']['size'];

  $error = "";
  if($foto == "") {
    $query = mysqli_query($con, "UPDATE pasien SET 
      nama_pasien = '$_POST[nama]',
      alamat_pasien = '$_POST[alamat]',
      kontak_keluarga = '$_POST[kontak]',
      keterangan = '$_POST[keterangan]' WHERE id = '$_POST[id]'");
  }
  else {
    if($tipefile != "image/jpeg" AND $tipefile != "image/jpg" AND $tipefile != "image/png") {
      $error = "Tipe file tidak didukung!";
    }
    else if ($ukuranfile > 1000000) {
      echo $ukuranfile;
      $error = 'Ukuran file terlalu besar (lebih dari 1MB)!';
    }
    else {
      $query = mysqli_query($con, "SELECT * FROM pasien WHERE id = '$_POST[id]'");
      $data = mysqli_fetch_array($query);
      if (file_exists("images/$data[foto]"))
        unlink("images/$data[foto]");
      move_uploaded_file($lokasi, "images/".$foto);
      $query = mysqli_query($con, "UPDATE pasien SET 
        foto = '$foto',
        nama_pasien = '$_POST[nama]',
        alamat_pasien = '$_POST[alamat]',
        kontak_keluarga = '$_POST[kontak]',
        keterangan = '$_POST[keterangan]' WHERE id = '$_POST[id]'");
    }
  }

  if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=?hal=pasien_edit&id=$_POST[id]'>";
  }
  else if ($query) {
    echo "Data berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='2;url=?hal=pasien'>";
  }
  else {
    echo 'Tidak dapat menyimpan data!<br/>';
    echo mysqli_error($con);
  }