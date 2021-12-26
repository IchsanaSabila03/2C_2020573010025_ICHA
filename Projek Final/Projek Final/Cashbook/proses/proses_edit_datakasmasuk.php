<?php
require "koneksi.php";
$nm_brg = $_POST['nm_brg'];
$jenis    = $_POST['jenis'];
$tanggal  = $_POST['tanggal'];
$jumlah   = $_POST['jumlah'];
$harga   = $_POST['harga'];

$update = mysqli_query($conn,"UPDATE tb_masuk SET jenis='$jenis', tanggal='$tanggal', jumlah='$jumlah', harga='$harga'  WHERE nama_barang='$nm_brg'");

if ($update){
    echo "<script>window.location='../kasmasuk';</script>";
}else{
    echo "<script>alert('Maaf data gagal di perbarui😭');
        window.location='../kasmasuk';</script>";
}
