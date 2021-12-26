<?php
require "koneksi.php";
$nm_brg = $_POST['nm_brg'];
$jenis    = $_POST['jenis'];
$tanggal   = $_POST['tanggal'];
$jumlah   = $_POST['jumlah'];
$harga   = $_POST['harga'];

$input = mysqli_query($conn,"INSERT INTO tb_barang (nama_barang, jenis, tanggal, jumlah, harga) 
values ('$nm_brg','$jenis','$tanggal','$jumlah','$harga')");

if ($input){
    echo "<script>window.location='../kasmasuk';</script>";
}else{
    echo "<script>alert('Maaf data gagal di tambah, sabar yaa😭');
        window.location='../kasmasuk';</script>";
}