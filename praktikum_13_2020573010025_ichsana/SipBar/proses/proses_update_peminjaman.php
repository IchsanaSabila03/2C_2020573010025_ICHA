<?php
include_once "koneksi.php";

$kd_brg = $_POST['kd_brg'];
$nm_brg = $_POST['nm_brg'];
$wkt_pengembalian = $_POST['wkt_pengembalian'];
$wkt_peminjaman = date("d-m-Y H:i:s");

$select = mysqli_query($conn, "UPDATE `tb_peminjaman` SET `barang` = '$nm_brg', `waktu_pinjam` = CURRENT_TIME(), `waktu_pengembalian` = '$wkt_pengembalian' WHERE `tb_peminjaman`.`barang` = $kd_brg ");

$select = mysqli_query($conn, "SELECT waktu_pinjam FROM tb_peminjaman WHERE barang = $nm_brg");
$hasil = mysqli_fetch_array($select);

if ($select) {
    echo "<script>alert('Data telah diperbaharui, Tanggal peminjaman diset pada $hasil[waktu_peminjaman] '); window.location='../peminjaman';</script>";
} else {
    echo "<script>alert('Mohon maaf data gagal di perbarui');
        window.location='../peminjaman';</script>";
}
