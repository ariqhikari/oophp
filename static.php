<?php
// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Halo " . self::$angka++ . "kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{

    public static $angka = 1;

    public function halo()
    {
        echo "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;

$obj->halo();
$obj->halo();
$obj->halo();

echo "<hr>";

$obj2 = new Contoh;

$obj2->halo();
$obj2->halo();
$obj2->halo();
