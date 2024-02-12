<?php
ob_start();
require_once "../inc/function.php";

$id = mysqli_real_escape_string($kon,@$_POST['Id_sekolah']);
$nama = mysqli_real_escape_string($kon,@$_POST['Nama_sekolah']);
$alamat = mysqli_real_escape_string($kon,@$_POST['Alamat']);
$telepon = mysqli_real_escape_string($kon,@$_POST['Telepon']);




// echo $satu.$dua.$tiga.$empat.$lima.$enam;

 if($id == "" )
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
	
if ( perbaharui ($_POST) > 0){
    echo "
    <script>
            alert('Data berhasil di tambahkan!');
            document.location.href = 'index.php?pages=setting';
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

	<i class="icon-warning-sign green"></i>
	<h4>data berhasil ditambahkan!!!</h4>
</div> 
<meta http-equiv="refresh" content="1; url=index.php?pages=setting">
<?php
 }
?>


