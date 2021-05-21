<?php
namespace Elektronik\Komputer {
    include("file02.php");
    $produk01 = new Laptop("Lenovo");
    echo $produk01->getInfo();
    echo "<br>";
}
namespace Elektronik {
    include("file03.php");
    $produk02 = new Televisi("Sony", 5000000);
    echo $produk02->getInfo();
}
?>