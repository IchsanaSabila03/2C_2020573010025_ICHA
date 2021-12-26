<?php
require "koneksi.php";
$nm_brg = $_GET['id'];

$delete = mysqli_query($conn,"DELETE FROM tb_masuk WHERE nama_barang='$nm_brg'");

if ($delete){
    echo "<script>window.location='../kasmasuk';</script>";
}else{
    echo "<script>alert('Maaf data gagal di hapus, silahkan ulangi kembali');
        window.location='../kasmasuk';</script>";
}
?>