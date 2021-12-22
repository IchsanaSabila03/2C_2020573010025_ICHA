<?php
require "koneksi.php";
$kd_brg = $_GET['id'];

$delete = mysqli_query($conn,"DELETE FROM tb_peminjaman WHERE barang='$kd_brg'");

if ($delete){
    echo "<script>window.location='../peminjaman';</script>";
}else{
    echo "<script>alert('Mohon maaf data gagal di hapus, silahkan ulangi kembali');
        window.location='../peminjaman';</script>";
}
?>