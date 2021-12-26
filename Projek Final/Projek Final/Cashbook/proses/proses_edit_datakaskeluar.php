<?php
require "koneksi.php";
$nm_brg = $_POST['nm_brg'];
$supplier    = $_POST['supplier'];
$tanggal  = $_POST['tanggal'];
$jumlah   = $_POST['jumlah'];
$harga   = $_POST['harga'];

$update = mysqli_query($conn,"UPDATE tb_keluar SET supplier='$supplier', tanggal='$tanggal', jumlah='$jumlah', harga='$harga'  WHERE nama_barang='$nm_brg'");

if ($update){
    echo "<script>window.location='../kaskeluar';</script>";
}else{
    echo "<script>alert('Maaf data gagal di perbarui😭');
        window.location='../kaskeluar';</script>";
}
