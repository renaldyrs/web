<?php
require "connect.php";
$id =$_GET['id'];
$update = mysqli_query($conn, " UPDATE FROM mhs WHERE id = $id");
if($update){
  header("location: read.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">

  <title>Update Data</title>
</head>

<body>

  <!-- Heading -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="lead">Pelatihan CRUD PHP Native Bootcamp LUG 2019</p>
      <h1 class="display-4">Update Data Mahasiswa</h1>
    </div>
  </div>

  <div class="container">
    <!-- Form -->
    <form>

      <!-- Input NIM -->
      <div class="form-group">
        <label>Nomor Induk Mahasiswa</label>
        <input type="text" class="form-control" name="nim" value="17410100188">
      </div>

      <!-- Input Nama -->
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" placeholder="contoh : Jhon Doe" name="nama" value="Jhon Doe">
      </div>

      <!-- Select Jurusan -->
      <div class="form-group">
        <label>Jurusan</label>
        <select class="form-control" name="jurusan">
          <option selected>S1 Sistem Informasi</option>
          <option>S1 Desain Komunikasi Visual</option>
          <option>D3 Sistem Informasi</option>
          <option>D4 Produksi Film dan TV</option>
          <option>S1 Akuntansi</option>
        </select>
      </div>

      <!-- Input Foto -->
      <div class="form-group">
        <label>Foto Mahasiswa</label>
        <input type="text" class="form-control" value="17410100010.jpg" name="foto">
      </div>

      <!-- Upload Foto -->
      <div class="form-group">
        <label>Ubah Foto</label><br>
        <img src="./foto-mhs/17410100000.jpg" width="150px;" alt="" srcset=""> <br><br> 
        <input type="file" class="form-control-file" name="uploadfoto">
      </div>

      <br><br>
      <!-- Button Batal -->
      <button type="submit" class="btn btn-danger" name="batal">Batal</button>
      <!-- Button Tambah -->
      <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>

    </form>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="./bootstrap/jquery.js"></script>
  <script src="./bootstrap/popper.js"></script>
  <script src="./bootstrap/bootstrap.js"></script>
</body>

</html>