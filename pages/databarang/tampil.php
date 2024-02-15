<div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>TABEL</strong> DATA BARANG</h2>

                    </div>

                    <div class="body">
                        <a class="btn btn-primary me-1 mb-1" type="button" href="index.php?pages=databarang&aksi=tambah">Tambah</a>               
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                     <th>No</th>
                                     <th>Id Barang</th> 
                                    <th>Nama barang</th>
                                    <th>Id Ruangan</th>
                                    <th>Id Kategori</th>
                                     <th>Kondisi</th>
                                    <th>Kode dana</th>
                                    <th>Nomor seri</th>                                     
                                     
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
<?php
 require_once '../inc/function.php';

//memasukan sql ke dalam function query
$TAMPIL = user_tampil("SELECT * FROM tb_databarang ORDER BY tb_databarang.id_barang ASC");
    //ambil data dari tbl_siswa tbl_jurusan tbl_status


$NO=1;
// while($DATA = mysqli_fetch_assoc ($HASIL)){
foreach ($TAMPIL as $DATA) : //mengganti kurung kurawal bua
    

?>
                                <tr>
                                  <td><?php echo $NO; ?></td>
                                  <td><?= $DATA['id_barang']; ?></td>
                                    <td><?= $DATA['nama_barang']; ?></td>
                                    <td><?= $DATA['id_ruangan']; ?></td>
                                    <td><?= $DATA['id_kategori']; ?></td>
                                     <td><?= $DATA['kondisi']; ?></td>
                                    <td><?= $DATA['kode_dana']; ?></td>
                                    <td><?= $DATA['no_seri']; ?></td>
                                     <td>
<a class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" type="button" href="index.php?pages=databarang&aksi=edit&id=<?php echo $DATA ['id_barang'];?>"><i class="zmdi zmdi-edit"></i></a>    
<a class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" type="button" href="index.php?pages=databarang&aksi=delete&id=<?php echo $DATA ['id_barang'];?>"><i class="zmdi zmdi-delete"></i></a> </i></button>
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
                                     <th>Id Barang</th> 
                                    <th>Nama barang</th>
                                    <th>Id Ruangan</th>
                                    <th>Id Kategori</th>
                                     <th>Kondisi</th>
                                    <th>Kode dana</th>
                                    <th>Nomor seri</th>  
                                     
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>