<?php
// define('NAMA', "Mochamad Indra Wahyudi");
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;


class Coba
{
  const NAMA = "Indra";
}

echo Coba::NAMA;
echo "<br>";
// echo __LINE__;


// function coba()
// {
//   return __FUNCTION__;
// }
// echo coba();

class coba1
{
  public $kelas = __CLASS__;
}
$obj = new coba1;
echo $obj->kelas;
