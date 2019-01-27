<?php 

//Jual Produk
//Komik
//Game

class Produk {
	public $judul;
	public $penulis;
	public $penerbit;
	public $harga;

	public function Hello() {
		return "$this->judul, $this->penulis";
	}
}

$produk1 = new Produk();
$produk1-> judul = "naruto";
$produk1-> penulis = "ilham";
$produk1-> penerbit = "gramedia";
$produk1-> harga = 2000;


$produk2 = new Produk();
$produk2-> judul = "game";
$produk2-> penulis = "ilham";
$produk2-> penerbit = "gramedia";
$produk2-> harga = 2000;

echo "Komik : " . $produk1->Hello();
echo "<br>";
echo "Komik : " . $produk2->Hello();


 ?>