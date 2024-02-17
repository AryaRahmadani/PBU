<?php

    require_once "DataBase.php";
    $usepen = new Penjualan;
    $usedb = new DataBase;
    echo $usedb -> insertData();
    echo "<br>";
    echo $usedb -> db;
    echo "<br>";
    echo $usedb -> ambil();
    echo "<br>";
    echo $usedb -> selectData();
    echo "<br>";
    echo DataBase::selectData();
    echo "<br>";
    echo $usepen -> barang();
    echo "<br>"
    echo Penjualan::pelanggan();
?>