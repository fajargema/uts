<?php
namespace Elektronik\Komputer;
namespace Elektronik;
include("file02.php");
include("file03.php");

$produk01 = new Komputer\Laptop("Lenovo");
echo $produk01->getInfo();
echo "<br>";

$produk01 = new Televisi("Sony", 5000000);
echo $produk01->getInfo();

?>