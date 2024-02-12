  <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Tambah</strong> Data Ruangan</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
<?php 

 require_once '../inc/function.php';
;

$id=$_GET['id_ruangan'];
$sql= "SELECT * FROM tb_ruangan WHERE id_ruangan = '$id' " or die ("Gagal Melakukan Query!!". mysqli_error());

$edit=mysqli_query($kon,$sql);
while ($row = mysqli_fetch_assoc($edit)) {
  $nama=$row['nama_ruangan'];
  $KODE=$row['id_ruangan'];

}

if (isset($_POST['Edit'])) {
  include "proses_edit.php";
}


?>
                    <div class="body">
                         <form role="form" method="post" enctype="multipart/form-data">
                            <label for="id_kategori">Kode Ruangan</label>
                            <div class="form-group">                                
                                <input name="Id_ruangan" type="text" id="id_ruangan" class="form-control" value="<?php echo $KODE; ?>" required readonly>
                            </div>
                            <label for="password">Nama Ruangan</label>
                            <div class="form-group">                                
                                <input name="Nama_ruangan" type="text" id="nama_ruangan" class="form-control" value="<?php echo $nama; ?>">
                            </div>
                        <button name="Edit" class="btn btn-primary" type="submit">Edit</button>
                        <button class="btn btn-success" type="reset">Reset</button>
                              <button class="btn btn-danger" href="index.php?pages=user" >Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>