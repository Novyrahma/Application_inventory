<?php 
require_once "../inc/function.php";
$id=$_GET['id_ruangan'];
$query = mysqli_query($kon, "SELECT * FROM tb_ruangan WHERE id_ruangan = '$id'") or die(mysql_error());
$data = mysqli_fetch_array($query);
?>
<!-- <nav style="--falcon-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../admin/index.php">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page"><a href="index.php?pages=kategori">Kategori</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Delete</li>


                  </ol>
                </nav>
<div class="page-header">
    <h3>
        KATEGORI
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Hapus &amp; Data Kategori
        </small>
    </h3>
</div> -->
    <div class="section">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="">Hapus Data</h3>
            </div>
            <div class="panel-body">
                <h3>Apakah anda menghapus data Kategori : <?php echo $data['nama_ruangan']; ?></h3>
                  <form class="form-horizontal col-sm-12" method="post" role="form">
                    <div class="form-group">
                    <hr>
                     <div class="">
                        <a href="index.php?pages=ruangan&aksi=proses_delete&id_ruangan=<?php echo $data ['id_ruangan'];?>" class="btn btn-danger">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> hapus</a>
                        <a href="?pages=kategori" class="btn btn-info">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> batal   
                        </a>
                     </div> 
                    </div>
                  </form>
            </div>
        </div>
    </div>