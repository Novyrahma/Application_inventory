<div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>TABEL</strong> PENDANAAN </h2>

                    </div>

                    <div class="body">
                        <a class="btn btn-primary me-1 mb-1" type="button" href="index.php?pages=pendanaan&aksi=tambah">Tambah</a>               
                        <a class="btn btn-info me-1 mb-1" type="button" href="index.php?pages=cop_laporan&aksi=laporan_pendanaan ">Invoice</a> 
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable" >
                            <thead>    
                                <tr>                 
                                     <th>No</th>
                                    <th>Kode Dana</th>
                                    <th>Sumber Dana</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
<?php
   require_once '../inc/function.php';

//memasukan sql ke dalam function query
$TAMPIL = user_tampil("SELECT * FROM tb_pendanaan ORDER BY tb_pendanaan.kode_dana ASC");
    //ambil data dari tbl_siswa tbl_jurusan tbl_status


$NO=1;
// while($DATA = mysqli_fetch_assoc ($HASIL)){
foreach ($TAMPIL as $DATA) : //mengganti kurung kurawal bua
    

?>
                                <tr>
                                  <td><?php echo $NO; ?></td>
                                    <td><?= $DATA['kode_dana']; ?></td>
                                    <td><?= $DATA['sumber_dana']; ?></td>
                                     <td>
<a class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" type="button" href="index.php?pages=pendanaan&aksi=edit&kode_dana=<?php echo $DATA ['kode_dana'];?>"><i class="zmdi zmdi-edit"></i></a>    
<a class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" type="button" href="index.php?pages=pendanaan&aksi=delete&kode_dana=<?php echo $DATA ['kode_dana'];?>"><i class="zmdi zmdi-delete"></i></a> </i></button>
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
                                    <th>Kode Dana</th>
                                    <th>Sumber Dana</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>