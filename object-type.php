<?php 

//Jual Produk
//Komik
//Game

class Produk {
	public $judul;
	public $penulis;
	public $penerbit;
	public $harga;

	public function __construct($judul, $penulis, $penerbit, $harga) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function Hello() {
		return "$this->penulis, $this->penerbit";
	}
}

class CetakInfoProduk {
	public function cetak( $produk ) {
		$str = "{$produk->judul} | {$produk->Hello()} | (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("naruto", "ilham", "Gramedia", 30000);
$produk2 = new Produk("game", "ilham", "gramedia", 2000);


echo "Komik : " . $produk1->Hello();
echo "<br>";
echo "Komik : " . $produk2->Hello();
echo "<br

>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

 ?>