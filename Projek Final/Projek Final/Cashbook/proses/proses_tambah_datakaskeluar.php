<?php
require "koneksi.php";
$nm_brg = $_POST['nm_brg'];
$supplier    = $_POST['supplier'];
$tanggal   = $_POST['tanggal'];
$jumlah   = $_POST['jumlah'];
$harga   = $_POST['harga'];

$input = mysqli_query($conn,"INSERT INTO tb_barang (nama_barang, supplier, tanggal, jumlah, harga) 
values ('$nm_brg','$supplier','$tanggal','$jumlah','$harga')");

if ($input){
    echo "<script>window.location='../kaskeluar';</script>";
}else{
    echo "<script>alert('Maaf data gagal di tambah, sabar yaa😭');
        window.location='../kaskeluar';</script>";
}