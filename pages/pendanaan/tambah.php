<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Tambah</strong> Data Pendanaan</h2>
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

 $KODE = autonumber("tb_pendanaan","kode_dana",3,"PDN");
 

?>
                    <div class="body">
                         <form role="form" method="post" enctype="multipart/form-data">
                            <label for="id_kategori">Kode Pendanaan</label>
                            <div class="form-group">                                
                                <input name="kode_dana" type="text" id="id_kategori" class="form-control" value="<?php echo $KODE; ?>" required readonly>
                            </div>
                            <label for="password">Sumber Dana</label>
                            <div class="form-group">                                
                                <input name="sumber_dana" type="text" id="nama_kategori" class="form-control" placeholder="Masukan nama kategori">
                            </div>
                            <button name="Tambah" class="btn btn-success" type="submit">Tambah</button>
                           <button class="btn btn-danger" type="reset">Reset</button>
                              <button class="btn btn-info" href="index.php?pages=pendanaan" >Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>