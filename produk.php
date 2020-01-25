<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "One Piece";

// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul = "Assasin Creed";
// $produk2->tambahProperty = "+62";

// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eiichiro Oda";
$produk3->penerbit = "Toei Animation";
$produk3->harga = 15000;

$produk4 = new Produk();
$produk4->judul = "Assassin's Creed Odyssey";
$produk4->penulis = "Jonathan Dumont";
$produk4->penerbit = "Ubisoft";
$produk4->harga = 51000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
