<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST["tambah"])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
          alert('data gagal ditambahkan');
          document.location.href = 'index.php';
        </script>";
  }
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h3>Form Tambah Data Buku</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label>
          Judul:
          <input type="text" name="judul" , autofocus, required class="form-control">
        </label>
      </div>
      <div class="mb-3">
        <label>
          Penulis:
          <input type="text" name="penulis" , required class="form-control">
        </label>
      </div>
      <div class="mb-3">
        <label>
          Penerbit:
          <input type="text" name="penerbit" , required class="form-control">
        </label>
      </div>
      <div class="mb-3">
        <label>
          Genre:
          <input type="text" name="genre" , required class="form-control">
        </label>
      </div>
      <div class="mb-3">
        <label>
          Gambar:
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
      </div>
      <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
    </form>
    <a href="index.php"><button>Kembali ke daftar buku</button></a>
  </div>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>