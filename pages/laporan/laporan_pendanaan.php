<div class="block-header">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
<?php
include "cop_surat.php";

?>
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                  <tr>                 
                                                  <th>No</th>
                                                 <th>Kode Dana</th>
                                                 <th>Sumber Dana</th>
                                     
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
                                        
                                             </tr>
                                         </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Note</h5>
                                        <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <p><b>Sub-total:</b> 2930.00</p>
                                        <p>Discout: 12.9%</p>
                                        <p>VAT: 12.9%</p>                                        
                                        <h3 class="m-b-0">USD 2930.00</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="hidden-print col-md-12 text-right">
                                    <a href="javascript:void(0);" class="btn btn-success btn-round"><i class="zmdi zmdi-print"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-round">Submit</a>
                                    <a href="index.php?pages=pendanaan&aksi=tampil" class="btn btn-info btn-round">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div role="tabpanel" class="tab-pane" id="notes" aria-expanded="false">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>ID:</strong> 22123</h2>
                                        <small>Created at: 18 Dec, 2017</small>
                                    </div>
                                    <div class="body">
                                        <h6>This is Note</h6>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>ID:</strong> 22124</h2>
                                        <small>Created at: 19 Dec, 2017</small>
                                    </div>
                                    <div class="body">
                                        <h6>This is Note</h6>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card xl-khaki">
                                    <div class="header">
                                        <h2><strong>ID:</strong> 22123</h2>
                                        <small>Created at: 18 Dec, 2017</small>
                                    </div>
                                    <div class="body">
                                        <h6>This is Note</h6>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card xl-parpl">
                                    <div class="header">
                                        <h2><strong>ID:</strong> 22124</h2>
                                        <small>Created at: 19 Dec, 2017</small>
                                    </div>
                                    <div class="body">
                                        <h6>This is Note</h6>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <button class="btn btn-default">Add Note</button>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                        <div class="card" id="details">
                            <div class="body">                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <address>
                                            <strong>ThemeMakker Inc.</strong><br>
                                            795 Folsom Ave, Suite 546<br>
                                            San Francisco, CA 54656<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-34636
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right">
                                        <p class="m-b-0"><strong>Order Date: </strong> Jun 15, 2016</p>
                                        <p class="m-b-0"><strong>Order Status: </strong> <span class="badge bg-orange">Pending</span></p>
                                        <p><strong>Order ID: </strong> #123456</p>
                                    </div>
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Description</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Invoice Created</td>
                                                        <td>18 Dec, 2017</td>
                                                        <td><span class="badge badge-default">Panding</span></td>
                                                    </tr>
                                                     <tr>
                                                        <td>1</td>
                                                        <td>Invoice Sent</td>
                                                        <td>19 Dec, 2017</td>
                                                        <td><span class="badge badge-default">Panding</span></td>
                                                    </tr>
                                                     <tr>
                                                        <td>1</td>
                                                        <td>Invoice Paid</td>
                                                        <td>20 Dec, 2017</td>
                                                        <td><span class="badge badge-success">Success</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    -->
                </div>
            </div>
        </div>
    </div>