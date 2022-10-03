<?php
require 'functions.php';

$buku = query("SELECT * FROM buku");
?>

<?php  ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container" style="margin: 0 auto;">
    <a href="tambah.php" class="btn btn-info">Tambah Data Buku</a>
    <br><br>

    <table class="table table-info table-striped table-bordered border-info">
      <thead>
        <tr>
          <td colspan="5"> Daftar Buku</td>
        </tr>
        <tr>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Genre</th>
          <th>Cover</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($buku as $b) : ?>
          <tr>
            <td><?= $b['judul']; ?></td>
            <td><?= $b['penulis']; ?></td>
            <td><?= $b['penerbit']; ?></td>
            <td><?= $b['genre']; ?></td>
            <td><img src="img/<?= $b['gambar']; ?>" height="200px"></td>
          </tr>
          <tr>
            <td colspan="5">
              <a href="ubah.php?id=<?= $b['id']; ?>" class="btn btn-info">Ubah Data Buku</a>
              <a href="hapus.php?id=<?= $b['id']; ?>" class="btn btn-danger" onclick="return confirm ('apakah anda yakin?')">Hapus Data Buku</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>


  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>