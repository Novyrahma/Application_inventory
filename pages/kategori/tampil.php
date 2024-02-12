 <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>TABEL</strong> KATEGORI </h2>

                    </div>

                    <div class="body">
                        <a class="btn btn-primary me-1 mb-1" type="button" href="index.php?pages=kategori&aksi=tambah">Tambah</a>               
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                     <th>No</th>
                                    <th>Id Kategori</th>
                                    <th>Nama kategori</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
<?php
   require_once '../inc/function.php';

//memasukan sql ke dalam function query
$TAMPIL = user_tampil  ("SELECT * FROM tb_kategori ORDER BY tb_kategori.id_kategori ASC");
    //ambil data dari tbl_siswa tbl_jurusan tbl_status


$NO=1;
// while($DATA = mysqli_fetch_assoc ($HASIL)){
foreach ($TAMPIL as $DATA) : //mengganti kurung kurawal bua
    

?>
                                <tr>
                                  <td><?php echo $NO; ?></td>
                                    <td><?= $DATA['id_kategori']; ?></td>
                                    <td><?= $DATA['nama_kategori']; ?></td>
                                     <td>
<a class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" type="button" href="index.php?pages=kategori&aksi=edit&id_kategori=<?php echo $DATA ['id_kategori'];?>"><i class="zmdi zmdi-edit"></i></a>    
<a class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" type="button" href="index.php?pages=kategori&aksi=delete&id_kategori=<?php echo $DATA ['id_kategori'];?>"><i class="zmdi zmdi-delete"></i></a> </i></button>
                                    </td>
                                  
                                </tr>
 <?php                                                     
$NO++;                                                        
endforeach;
?>   
                            </tbody>
                             <tfoot>
                                <tr>
                                 <th>No</th>
                                    <th>Id Kategori</th>
                                    <th>Nama kategori</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>