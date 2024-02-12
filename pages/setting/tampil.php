  <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>FORM</strong> Data Setting</h2>
                        
                    </div>
                  
<?php 
require_once '../inc/function.php';

$query = mysqli_query($kon,"SELECT * FROM tb_setting");
$data = mysqli_fetch_array($query);
//var_dump($data);

?>

<?php 
if (isset($_POST['Perbaharui'])) {
 include "proses_edit.php";
}

if (isset($_POST['Perbaharui_logo'])) {
 include "proses_edit_logo.php";
}

?>
<div class="row">
    <div class="col-9">                   
        <div class="p-4 code-to-copy">
                      <form method="post" enctype="multipart/form-data" >
                        <div class="mb-3">
                          <label class="form-label" for="basic-form-name">Nama Sekolah</label>
                          <input class="form-control" id="basic-form-name" name="Id_sekolah" type="hidden" value="<?php echo $data['id_setting']; ?>" />
                          <input class="form-control" id="basic-form-name"  name="Nama_sekolah" type="text" value="<?php echo $data['nama_sekolah']; ?>" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-form-email">Alamat</label>
                          <input name="Alamat"class="form-control" id="basic-form-email" type="text" value="<?php echo $data['alamat']; ?>" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-form-password">Telepon</label>
                          <input name="Telepon"class="form-control" id="basic-form-password" type="text" value="<?php echo $data['telepon']; ?>"/>
                        </div>
                        <button class="btn btn-primary" type="submit" name="Perbaharui">Perbaharui</button>
                      </form>
                    </div>              
                </div>
 
      
            <div class="row">
                <div class="p-4 code-to-copy">
                      <form method="post" role="form"  enctype="multipart/form-data">                 
                        <div class="mb-3">
                          <label class="form-label">Logo Sekolah</label>
                          <input class="form-control" id="basic-form-name" name="Id_sekolah" type="hidden" value="<?php echo $data['id_setting']; ?>" />
                          <input class="form-control" type="file" name="Logo" />
                          <br>
                          <img src="../images/logo/<?php echo $data['path_logo']?>" width="200px">
                        </div>
                        <button class="btn btn-primary" type="submit" name="Perbaharui_logo">Perbaharui Logo</button>
                  </form>
                    </div>
                </div>
         
  </div>

 
      


      
        