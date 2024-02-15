<?php
ob_start();
require_once "../inc/function.php";

$kode = mysqli_real_escape_string($kon,@$_POST['Id_barang']);
$nama = mysqli_real_escape_string($kon,@$_POST['Nama_barang']);
$id_ruangan = mysqli_real_escape_string($kon,@$_POST['Id_ruangan']);
$kategori = mysqli_real_escape_string($kon,@$_POST['Kategori']);
$kondisi = mysqli_real_escape_string($kon,@$_POST['Kondisi']);
$kode_dana = mysqli_real_escape_string($kon,@$_POST['Kode_dana']);
$nomor_seri = mysqli_real_escape_string($kon,@$_POST['Nomor_seri']);

echo $kode,$nama,$id_ruangan,$kategori,$kondisi,$kode_dana,$nomor_seri;

if( $kode == ""  || $nama == "" || $id_ruangan == "" || $kategori == "" || $kondisi == "" || $kode_dana == "" || $nomor_seri == '')
  {
?>
<div class="alert-blok alert-dager">
    <button type="button" class="close" data-dismiss="alert">
        <i class="icon-remove">Data Gagal Diupdate</i>
  </button>
  </div>
  <?php
  }
  else
  {
    if (databarang_tambah($_POST) > 0){
      echo "
      <script>
              alert('Data Berhasil Di Update!');
               document.location.href = 'index.php?pages=databarang&aksi=tampil';
              </script>
              ";
              echo "<br>";
              echo mysqli_error($kon);
    } else {
      echo "
      <script>
              alert('Data gagal');
               document.location.href = 'index.php?pages=databarang&aksi=tambah';
              </script>
              ";
              echo "<br>";
              echo mysqli_error($kon);
    }
   
?>
  <i class="icon_ok green"></i>
  <h4>Data Berhasil Di Update !</h4>
  <!-- <meta http-equiv="refresh" content="100; url=index.php?pages=databarang"> -->
  <?php
  }
  ?>