<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/pt_ilcs/dbconn2.php');
$dbconn2 = ilcs();
session_start();

$kode_barang = $_POST['kode_barang'];
$uraian_barang = $_POST['uraian_barang'];
$bm = $_POST['bm'];
$nilai_komoditas = $_POST['nilai_komoditas'];
$nilai_bm = $_POST['nilai_bm'];

$queryProduct = "INSERT INTO PRODUK (KODE_BARANG, URAIAN_BARANG, BM, NILAI_KOMODITAS, NILAI_BM) VALUES ('" . $kode_barang . "', '" . $uraian_barang . "', '" . $bm . "', '" . $nilai_komoditas . "', '" . $nilai_bm . "')";

if (mysqli_query($dbconn2, $queryProduct)) {
    echo "INSERT DATA BERHASIL";
} else {
    echo "INSERT DATA GAGAL";
}
