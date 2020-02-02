<?php

// define("NAMA", "Ariq Hikari");
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;


// class Coba
// {
//     const NAMA = "Ariq";
// }

// echo Coba::NAMA;

class Coba
{
    public $coba = __CLASS__;
}

$obj1 = new Coba();
echo $obj1->coba;
