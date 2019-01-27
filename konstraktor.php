<?php 

class Produk {
	public $judul;
	public $penulis;
	public $penerbit;
	public $harga;

	function __construct(){
		echo "ini adalah Konstraktor";
	}

	public function Hello() {
		return "$this->judul, $this->penulis $this->penerbit, $this->harga ";
	}
}

$produk1 = new Produk();
$produk1-> judul = "naruto";
$produk1-> penulis = "ilham";
$produk1-> penerbit = "gramedia";
$produk1-> harga = 2000;

echo "<br>";

echo "Komik : " . $produk1->Hello();
 ?>