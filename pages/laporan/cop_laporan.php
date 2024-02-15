<?php
@$aksi= $_GET['aksi'];
switch ($aksi) {
    case "laporan_pendanaan";
        include "laporan_pendanaan.php";
        break;
    case "laporan_kategori";
        include "laporan_kategori.php";
        break;
    case "laporan_ruangan";
        include "laporan_ruangan.php";
        break;
    case "laporan_peminjaman";
        include "laporan_peminjaman.php";
        break;
    case "laporan_pengajuan";
        include "laporan_pengajuan.php";
        break;
    case "laporan_pengaduan";
        include "laporan_pengaduan.php";
        break;
    case "laporan_user";
        include "laporan_user.php";
        break;
}
?>