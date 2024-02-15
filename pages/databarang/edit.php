<?php
$id=$_GET['id'];
$sql = "SELECT * FROM tb_databarang WHERE id_barang ='$id'" or die ("Gagal melakukan query!!!".
       mysql_error());

       $edit = mysqli_query($kon,$sql);
       $row = mysqli_fetch_assoc($edit);
       $kode = $row['id_barang'];
       $nama = $row['nama_barang'];
       $id_ruangan = $row['id_ruangan'];
       $kategori = $row['id_kategori'];
       $kondisi = $row['kondisi'];
       $kode_dana = $row['kode_dana'];
       $nomor_seri = $row['no_seri'];

       

// echo $id.$nama.$alamat.$email.$foto.$level;
       if (isset($_POST['Edit'])) {
        include "proses_edit.php";
       }
?>
<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Edit</strong> Data Barang</h2>
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
             if (isset($_POST['Edit'])){
              include "proses_edit.php";
             }
             require_once "../inc/function.php";

             
             ?>
                    <div class="body">
                         <form role="form" method="post" enctype="multipart/form-data">
                            <label for="id_barang">Id Barang</label>
                            <div class="form-group">                                
                                <input name="Id_barang" type="text" id="id_barang" class="form-control" value="<?php echo $kode; ?>" required readonly>
                            </div>
                            <label for="password">Nama barang</label>
                            <div class="form-group">                                
                                <input name="Nama_barang" type="text" id="nama_barang" class="form-control" placeholder="Masukan nama barang">
                            </div>
                            <label for="id_ruangan">Id ruangan</label>
                             <div class="form-group">
                            <select class="form-select" id="exampleSelect12" name="Id_ruangan">
                            <option>===Pilih Ruangan===</option>
                                                            <?php
                                                                $SQL = "SELECT * FROM tb_ruangan" or die ("Data Tidak Di Temukan...!".mysqli_error($kon));
                                                                $QUERY = mysqli_query($kon,$SQL);
                                                                
                                                                while ($DATA = mysqli_fetch_array($QUERY)){
                                                                    echo '<option value="'.$DATA['id_ruangan'].'">'.$DATA['nama_ruangan'].'</optionn>';
                                                                }
                                                                ?>
                            </select>  
                                </div>
                             <div class="form-group">
                            <label class="form-label" for="exampleSelect1">Kategori</label>
                            <select class="form-select" id="exampleSelect12" name="Kategori">
                            <option>===Pilih kategori===</option>
                                                            <?php
                                                                $SQL = "SELECT * FROM tb_kategori" or die ("Data Tidak Di Temukan...!".mysqli_error($kon));
                                                                $QUERY = mysqli_query($kon,$SQL);
                                                                
                                                                while ($DATA = mysqli_fetch_array($QUERY)){
                                                                    echo '<option value="'.$DATA['id_kategori'].'">'.$DATA['nama_kategori'].'</optionn>';
                                                                }
                                                                ?>
                            </select>  
                            </div>
                                         <label for="password">Kondisi</label>
                            <div class="form-group">                                
                                <input name="kondisi" type="text" id="Kondisi" class="form-control" placeholder="Masukan kondisi">
                            </div>

                             <div class="form-group">
                            <label class="form-label" for="exampleSelect1">Kode Dana</label>
                            <select class="form-select" id="kode_dana" name="Kode_dana">
                            <option>===Pilih kategori===</option>
                                                            <?php
                                                                $SQL = "SELECT * FROM tb_pendanaan" or die ("Data Tidak Di Temukan...!".mysqli_error($kon));
                                                                $QUERY = mysqli_query($kon,$SQL);
                                                                
                                                                while ($DATA = mysqli_fetch_array($QUERY)){
                                                                    echo '<option value="'.$DATA['kode_dana'].'">'.$DATA['sumber_dana'].'</optionn>';
                                                                }
                                                                ?>
                            </select>  
                            </div>
                            <label for="password">Nomor Seri</label>
                            <div class="form-group">                                
                                <input name="Nomor_seri" type="number" id="nomor_seri" class="form-control" placeholder="Masukan Nomor Seri">
                            </div>
                                <button name="Edit" class="btn btn-primary" type="submit">Edit</button>
                           <button class="btn btn-success" type="reset">Reset</button>
                              <button class="btn btn-danger" href="index.php?pages=user" >Cancel</button>
                        </form>
                </div>
            </div>
        </div>