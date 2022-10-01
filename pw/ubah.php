<?php
require 'functions.php';
// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query buku berdasarkan id
$b = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST["ubah"])) {
  if (ubah($_POST) > 0) {
    echo "<script>
      alert('data berhasil diubah');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "error";
  }
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <h3>Form Ubah Data Buku</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $b['id']; ?>">
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
        <input type="hidden" name="gambar_lama" value="<?= $b['gambar']; ?>">
        <label>
          Gambar:
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/<?= $b['gambar']; ?>" class="img-preview" width="120" style="display: block;">
      </div>
      <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>
    </form>
    <a href="index.php"><button>Kembali ke daftar buku</button></a>
  </div>

  <script src="script.js"></script>
</body>

</html>