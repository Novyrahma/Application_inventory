 <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>TABEL</strong> RUANGAN </h2>

                    </div>

                    <div class="body">
                        <a class="btn btn-primary me-1 mb-1" type="button" href="index.php?pages=ruangan&aksi=tambah">Tambah</a>               
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                     <th>No</th>
                                    <th>Kode Ruangan</th>
                                    <th>Nama Ruangan</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
<?php
   require_once '../inc/function.php';

//memasukan sql ke dalam function query
$TAMPIL = user_tampil  ("SELECT * FROM tb_ruangan ORDER BY tb_ruangan.id_ruangan ASC");
    //ambil data dari tbl_siswa tbl_jurusan tbl_status


$NO=1;
// while($DATA = mysqli_fetch_assoc ($HASIL)){
foreach ($TAMPIL as $DATA) : //mengganti kurung kurawal bua
    

?>
                                <tr>
                                  <td><?php echo $NO; ?></td>
                                    <td><?= $DATA['id_ruangan']; ?></td>
                                    <td><?= $DATA['nama_ruangan']; ?></td>
                                     <td>
<a class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" type="button" href="index.php?pages=ruangan&aksi=edit&id_ruangan=<?php echo $DATA ['id_ruangan'];?>"><i class="zmdi zmdi-edit"></i></a>    
<a class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" type="button" href="index.php?pages=ruangan&aksi=delete&id_ruangan=<?php echo $DATA ['id_ruangan'];?>"><i class="zmdi zmdi-delete"></i></a>
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
                                    <th>Kode Ruangan</th>
                                    <th>Nama Ruangan</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>