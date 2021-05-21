<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function produkAwal() {
        return "Jenis : $this->jenis"."<br>"."Merk : $this->merek";
    }

    public function cekStok() {
        return $this->stok;
    }

    public function tambahStok($nilai = 12){
        if ($this->stok + $nilai > 100) {
            echo "Maaf stok sudah penuh. Penambahan stok dibatalkan <br>"; 
            echo "$this->jenis Merek $this->merek. Jumlah Stok saat ini : ".$this->stok;
            return false;
        } else {
            return "$this->jenis Merek $this->merek Stok ditambah ".$nilai.".<br> Jumlah Stok saat ini : ".
            $this->stok = $this->stok + $nilai;
        }
    }

}

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";
$produk01->stok = 54;

echo $produk01->produkAwal()."<br>";
echo "Stok Awal : ".$produk01->cekStok()."<br>"."<br>";

echo $produk01->tambahstok();
echo "<br><br>";
echo $produk01->tambahstok(20);
echo "<br><br>";
echo $produk01->tambahstok(15);
?>