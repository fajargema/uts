<?php

include("file02.php");
include("file03.php");

use Elektronik\Komputer\Laptop as Laptop;
use Elektronik\Televisi as Televisi;

$produk01 = new Laptop("Lenovo");
echo $produk01->getInfo();
echo "<br>";

$produk01 = new Televisi("Sony", 5000000);
echo $produk01->getInfo();

?>