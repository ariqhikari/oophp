<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $halaman,
        $jam,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $jam = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->jam = $jam;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->halaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->jam} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("One Piece", "Eicchiro Oda", "Toei Animation", 15000, 80, 0, "Komik");
$produk2 = new Produk("Assassin's Creed Odyssey", "Jonathan Dumont", "Ubisoft", 51000, 0, 60, "Game");
$produk3 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 20000, 50, 0, "Komik");

// Komik : One Piece | Eicchiro Oda, Toei Animation, (Rp. 15000) - 80 Halaman.
// Game : Assasin's Creed Odyssey | Jonathan Dumont, Ubisoft, (Rp. 51000) ~ 60 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
