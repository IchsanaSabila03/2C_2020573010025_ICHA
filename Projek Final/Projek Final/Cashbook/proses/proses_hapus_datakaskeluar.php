<?php
require "koneksi.php";
$nm_brg = $_GET['id'];

$delete = mysqli_query($conn,"DELETE FROM tb_keluar WHERE nama_barang='$nm_brg'");

if ($delete){
    echo "<script>window.location='../kaskeluar';</script>";
}else{
    echo "<script>alert('Maaf data gagal di hapus, silahkan ulangi kembali');
        window.location='../kaskeluar';</script>";
}
?>