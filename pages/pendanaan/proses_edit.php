
<?php
ob_start();
require_once "../inc/function.php";

$kode = mysqli_real_escape_string($kon,@$_POST['kode_dana']);
$sumber = mysqli_real_escape_string($kon,@$_POST['sumber_dana']);

// echo $id.$nama.$alamat.$foto.$level.$foto_db;

// echo $kode,$status,$nama,$alamat,$telepon,$email;

if($kode == "" || $sumber == "" )
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
    if (dana_edit($_POST) > 0){
      echo "
      <script>
              alert('Data Berhasil Di Update!');
               document.location.href = 'index.php?pages=pendanaan';
              </script>
              ";
              echo "<br>";
              echo mysqli_error($kon);
    } else {
      echo "
      <script>
              alert('Data Berhasil Di Update!');
               document.location.href = 'index.php?pages=pendanaan&aksi=edit';
              </script>
              ";
              echo "<br>";
              echo mysqli_error($kon);
    }
   
?>
  <i class="icon_ok green"></i>
  <h4>Data Berhasil Di Update !</h4>
  <meta http-equiv="refresh" content="1, url=index.php?pages=pendanaan&aksi=tampil">
  <?php
  }
  ?>