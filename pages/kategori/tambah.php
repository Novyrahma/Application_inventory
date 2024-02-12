  <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Tambah</strong> Data Kategori</h2>
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
if (isset($_POST['Tambah'])) {
  include "proses_tambah.php";
}
 require_once '../inc/function.php';

 $KODE = autonumber("tb_kategori","id_kategori",3,"KTG");
 

?>
                    <div class="body">
                         <form role="form" method="post" enctype="multipart/form-data">
                            <label for="id_kategori">Id Kategori</label>
                            <div class="form-group">                                
                                <input name="Id_kategori" type="text" id="id_kategori" class="form-control" value="<?php echo $KODE; ?>" required readonly>
                            </div>
                            <label for="password">Nama Kategori</label>
                            <div class="form-group">                                
                                <input name="Nama_kategori" type="text" id="nama_kategori" class="form-control" placeholder="Masukan nama kategori">
                            </div>
                                                    <button name="Tambah" class="btn btn-primary" type="submit">Tambah</button>
                           <button class="btn btn-success" type="reset">Reset</button>
                              <button class="btn btn-danger" href="index.php?pages=user" >Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>