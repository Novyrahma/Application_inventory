<?php
ob_start();
require_once "../inc/function.php";

$kode = mysqli_real_escape_string($kon,@$_POST['kode_dana']);
$sumber = mysqli_real_escape_string($kon,@$_POST['sumber_dana']);


// echo $nama.$kode;

 if($sumber == "" || $kode == ""  )
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
	
if (dana_tambah($_POST) > 0){
    echo "
    <script>
            alert('Data berhasil di tambahkan!');
            document.location.href = 'index.php?pages=pendanaan&aksi=tampil';
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
<meta http-equiv="refresh" content="10; url=index.php?pages=pendanaan">
<?php
 }
?>


