<?php
ob_start();
require_once "../inc/function.php";

$kode = mysqli_real_escape_string($kon,@$_POST['Id_kategori']);
$nama = mysqli_real_escape_string($kon,@$_POST['Nama_kategori']);


// echo $nama.$kode;

 if($nama == "" || $kode == ""  )
 {
?>
 <div class="alert alert-block alert-danger">
	<button type="button" class="close" data-dismiss="alert">
 		<i class="icon-remove"></i>
 	</button>

	<i class="icon-warning-sign red"></i>
 	<h4>Pastikan semua form terisi !!!</h4>
 </div> 
 <?php
  }
  else
 {
	
if (kategori_tambah($_POST) > 0){
    echo "
    <script>
            alert('Data berhasil di tambahkan!');
            document.location.href = 'index.php?pages=kategori&aksi=tampil';
            </script>
            ";
            echo "<br>";
            echo mysqli_error($kon);
  }
?>

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-warning-sign red"></i>
	<h4>data gagal ditambahkan!!!</h4>
</div> 
<meta http-equiv="refresh" content="10; url=index.php?pages=kategori">
<?php
 }
?>


