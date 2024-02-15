<?php
require_once "../inc/function.php";
if (barang_hapus($_POST) > 0){
    echo "
    <script>
            alert('Data berhasil di hapus!');
            document.location.href = 'index.php?pages=databarang';
            </script>
            ";
            echo "<br>";
            echo mysqli_error($kon);
  }

?>

<meta http-equiv="refresh" content="1; url=index.php?pages=databarang">