<?php
require_once '../inc/function.php';
if (dana_delete($_POST) > 0){
    echo 
    "<script>
            alert('Data berhasil di hapus!');
            document.location.href = 'index.php?pages=pendanaan';
     </script>";
            
            echo "<br>";
            echo mysqli_error($kon);
  }

?>
<meta http-equiv="refresh" content="1; url=index.php?pages=pendanaan">