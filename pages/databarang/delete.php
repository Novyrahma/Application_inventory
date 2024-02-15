<?php
require_once '../inc/function.php';
$id = $_GET['id'];
$query = mysqli_query($kon,"SELECT * FROM tb_databarang WHERE id_barang ='$id'") or die ("Gagal melakukan query!!!".
mysql_error());
$DATA = mysqli_fetch_array($query);
?>

<!-- <div class="card mb-2 col-lg-16">
            
            <div class="card-body">
              <table class="table table-striped table-bordered">
<div class = "page-header">
    <h1>
        HAPUS PEMINJAMAN
        <small>
            <i class ="ace-icon fa fa-angle-double-right"></i>
            Hapus &amp; Data Peminjaman
        </small>
</h1>
</div> -->
<div class ="section">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="">Hapus Data</h3>
</div>
<div class="panel-body">
    <h3>Apakah Anda Menghapus Data Barang : <?php echo $DATA['nama_barang']; ?></h3>
    <form class ="form-horizontal col-sm-12" method="post" role="form">
        <div class="forn-group">
            <hr>
            <div class="">
            <a href="?pages=databarang&aksi=proses_delete&id=<?php echo $DATA['id_barang']; ?>" class="btn btn-danger">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="position: right;"></span>Hapus</a>
            <a href="?pages=databarang" class ="btn btn-success">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Batal</a>
</div>
</table>
</div>
       </div>
      </div>
    </form>
   </div>
  </div>
 </div>
                
