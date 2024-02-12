<?php
ob_start();
require_once "../inc/function.php";

$id = mysqli_real_escape_string($kon,@$_POST['Id_sekolah']);
$logo = @$_FILES['Logo'] ['tmp_name'];
$target ='../images/logo/';
$gambar_logo = @$_FILES['Logo'] ['name'];

   

echo $id."|".$logo."|".$target."|".$gambar_logo;

 if($id == "" || $logo == "" || $target == "" || $gambar_logo == "")
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
	
if (perbaharui_logo($_POST) > 0){
    echo "
    <script>
            alert('Data berhasil di tambahkan!');
            // document.location.href = 'index.php?pages=setting';
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
<meta http-equiv="refresh" content="10; url=index.php?pages=setting">
<?php
 }
?>


