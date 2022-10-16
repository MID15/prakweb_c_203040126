<?php
class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "Mochamad Indra Wahyudi",
  //     "nrp" => "203040126",
  //     "email" => "indra.wahyudi@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Kalam Mahardika",
  //     "nrp" => "203030106",
  //     "email" => "kalam.mahardika@gmail.com",
  //     "jurusan" => "Teknik Industri"
  //   ],
  //   [
  //     "nama" => "Akbar Maulana",
  //     "nrp" => "203040166",
  //     "email" => "akbar.maulana@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Dhaifullah Hilmy",
  //     "nrp" => "203020113",
  //     "email" => "dhaifullah.hilmy@gmail.com",
  //     "jurusan" => "Teknik Mesin"
  //   ],
  //   [
  //     "nama" => "Hady Ismanto",
  //     "nrp" => "203030036",
  //     "email" => "hady.ismanto@gmail.com",
  //     "jurusan" => "Teknik Industri"
  //   ]
  // ];

  private $dbh, $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=prakweb_c_203040126_pw';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
