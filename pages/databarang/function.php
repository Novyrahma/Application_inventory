<?php  


$hostname = "localhost";
$database = "db_inventori";
$username = "root";
$password = "";
$kon = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi
if (!$kon) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

function autonumber($tabel,$kolom,$lebar=0,$awalan){
    global $kon;
    global $tgl;
   $auto = mysqli_query($kon,"select $kolom from $tabel order by $kolom desc limit 1") or die (mysqli_error($kon));
   $jumlah_record = mysqli_num_rows($auto);
   if ($jumlah_record == 0)
   $nomor = 1;
else {
    $row = mysqli_fetch_array($auto);
    $nomor = intval(substr($row[0],strlen($awalan)))+1;

   }
   if($lebar>0)
        $angka = $awalan.str_pad($nomor,$lebar,"0", STR_PAD_LEFT);
       else
       $angka=$awalan.$nomor;
   return $angka;
}
function registrasi($data){

	global $kon;

 $nama = stripcslashes($data["Nama"]);
 $email = strtolower(stripcslashes($data["Email"]));
 $password =mysqli_real_escape_string($kon,$data["Password"]);
 $password2 =mysqli_real_escape_string($kon,$data["Password2"]);


 $result = mysqli_query($kon,"SELECT email FROM tb_user WHERE email='$email' ");


 if (mysqli_fetch_assoc($result)) {
 	echo "<script>

    alert('email terdaftar ');
 	</script>";
 	return false;
 }


 if ($password !== $password2) {
 echo "<script>

    alert('konfirmasi password tidak sesuai ');
    document.location.href = 'register.php';
 	</script>";
 	return false;
 }

//return 1;

//$password = md5($password);
$password = password_hash($password, PASSWORD_DEFAULT);

//var_dump($password); die;


$SQL = "INSERT INTO tb_user SET
name ='$nama',
email ='$email',
level ='Petugas',
password='$password'";

mysqli_query($kon,$SQL);
return mysqli_affected_rows($kon);
}

function setting($data){
    global $kon;
    $result  = mysqli_query($kon,$data);
    $row = [];  //kita menyiapkan wadah kosong data untuk menyimpan data yang ada di dalam database
    $row = mysqli_fetch_array($result);

        // $rows[] =$row; //disini kitdataa sudah memasukan data spesifik


    
         return $row;//mengembalikan data
 }

function user_tampil($query){
  global $kon; //variabel yang adad di dalam scope aslinya berbeda dengan yang ada di luar scope agar variabel yang di luar bisa di baca data scope maka gunakan global
  $result =mysqli_query($kon,$query);
  $row =[]; //kita menyiapkan wadah kosong untuk menyimpoan data yang ada di dalam data base(ibarat  nya menyimpan langsung baju di dalam lemari)

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] =$row;//kita suadah memasukan data spesifik (ibarat  nya baju)
  }
  return $rows;//mengembalikan nilai
}

function user_tambah($data){
global $kon;

$nama = stripcslashes($data["Nama"]);
$email = strtolower(stripcslashes($data["Email"]));

$password1=mysqli_real_escape_string($kon,@$_POST['Password1']);
$password2=mysqli_real_escape_string($kon,@$_POST['Password2']);

// $nama =mysqli_real_escape_string($kon,@$_POST['Nama']);
$alamat=mysqli_real_escape_string($kon,@$_POST['Alamat']);
// $email=mysqli_real_escape_string($kon,@$_POST['Email']);


$foto =@$_FILES['Poto_user']['tmp_name'];
$target ='../images/user/';
$gambar_foto = @$_FILES['Poto_user']['name'];


$tgl = date('Y-m-d H:i:s');


$upload_foto = move_uploaded_file($foto,$target.$gambar_foto);


$result=mysqli_query($kon,"SELECT email FROM tb_user WHERE email = '$email' ");

if (mysqli_fetch_assoc($result)) {
  echo "<script>

    alert('email terdaftar ');
  </script>";
  return false;
 }


 if ($password1 !== $password2) {
 echo "<script>

    alert('konfirmasi password tidak sesuai ');
    document.location.href = '../user/tambah.php';
  </script>";
  return false;
 }

//return 1;

//$password = md5($password);
$password1 = password_hash($password1, PASSWORD_DEFAULT);

//var_dump($password); die;


$SQL = "INSERT INTO tb_user SET
name ='$nama',
email ='$email',
alamat ='$alamat',
password='$password1',
foto= '$gambar_foto',
level = 'Petugas',
created_at = '$tgl'";

mysqli_query($kon,$SQL);
return mysqli_affected_rows($kon);



}

function user_edit($data){
  global$kon;


$id =mysqli_real_escape_string($kon,@$_POST['Id_user']);
$nama=mysqli_real_escape_string($kon,@$_POST['Nama']);
$alamat=mysqli_real_escape_string($kon,@$_POST['Alamat']);
$level=mysqli_real_escape_string($kon,@$_POST['Level']);
$foto_db=mysqli_real_escape_string($kon,@$_POST['Foto_db']);
$foto_edit=mysqli_real_escape_string($kon,@$_POST['Foto_edit']);


if ($_FILES['Foto_edit']['tmp_name']=="") {
    $gambar_user = $foto_db;
} else {
    $foto =@$_FILES['Foto_edit']['tmp_name'];
    $target ='../images/user/';
    $gambar_user = @$_FILES['Foto_edit']['name'];

    $update_user = move_uploaded_file($foto,$target.$gambar_user);

}


$SQL = " UPDATE tb_user SET
name ='$nama',
alamat ='$alamat', 
level ='$level',
foto ='$gambar_user'WHERE tb_user.id='$id'";

mysqli_query($kon,$SQL);
return mysqli_affected_rows($kon);

}

function user_delete(){
  global $kon;

$id=$_GET['id'];
  mysqli_query($kon, "DELETE FROM tb_user WHERE tb_user.id='$id'");
  return mysqli_affected_rows($kon);

}

function peminjaman_tambah($data){
    global $kon;

    $kode = mysqli_real_escape_string($kon,@$_POST['Id_peminjaman']);
    $status = mysqli_real_escape_string($kon,@$_POST['Status_peminjaman']);
    $nama = mysqli_real_escape_string($kon,@$_POST['Nama_peminjaman']);
    $alamat = mysqli_real_escape_string($kon,@$_POST['Alamat']);
    $telepon = mysqli_real_escape_string($kon,@$_POST['Telepon']);
    $email = mysqli_real_escape_string($kon,@$_POST['Email']);

    
    $SQL = "INSERT INTO tb_peminjaman SET
    id_peminjaman = '$kode',
    status_peminjaman = '$status',
    nama = '$nama',
    alamat = '$alamat',
    telepon = '$telepon',
    email = '$email'";
    mysqli_query ($kon,$SQL);
    return mysqli_affected_rows($kon);
}
function peminjaman_edit($data){
    global $kon;

    $kode = mysqli_real_escape_string($kon,@$_POST['Id_peminjaman']);
    $status = mysqli_real_escape_string($kon,@$_POST['Status_peminjaman']);
    $nama = mysqli_real_escape_string($kon,@$_POST['Nama_peminjaman']);
    $alamat = mysqli_real_escape_string($kon,@$_POST['Alamat']);
    $telepon = mysqli_real_escape_string($kon,@$_POST['Telepon']);
    $email = mysqli_real_escape_string($kon,@$_POST['Email']);
    
    $SQL = "UPDATE tb_peminjaman SET
    id_peminjaman = '$kode',
    status_peminjaman = '$status',
    nama = '$nama',
    alamat = '$alamat',
    telepon = '$telepon',
    email = '$email' WHERE tb_peminjaman.id_peminjaman='$kode'";
   mysqli_query ($kon,$SQL);
   return mysqli_affected_rows($kon);
}
function peminjaman_hapus($data){
    global $kon;
  
  $id=$_GET['id'];
    mysqli_query($kon, "DELETE FROM tb_peminjaman WHERE tb_peminjaman.id_peminjaman='$id'");
    return mysqli_affected_rows($kon);
  
  
  }
  function pengajuan_tambah($data){
    global $kon;

    $kode = mysqli_real_escape_string($kon,@$_POST['Id_pengajuan']);
    $barang = mysqli_real_escape_string($kon,@$_POST['barang']);
    $kategori = mysqli_real_escape_string($kon,@$_POST['kategori']);
    $keterangan = mysqli_real_escape_string($kon,@$_POST['keterangan']);
    $status = mysqli_real_escape_string($kon,@$_POST['status']);
    
    
    $SQL = "INSERT INTO tb_pengajuan SET
    id_pengajuan = '$kode',
    id_barang = '$barang',
    id_kategori = '$kategori',
    keterangan = '$keterangan',
    status_pengajuan = '$status'";

   mysqli_query ($kon,$SQL);
   return mysqli_affected_rows($kon);
}
function pengajuan_hapus($data){
    global $kon;
  
  $id=$_GET['id'];
    mysqli_query($kon, "DELETE FROM tb_pengajuan WHERE tb_pengajuan.id_pengajuan='$id'");
    return mysqli_affected_rows($kon);
  
  
  }
  function pengajuan_edit($data){
    global $kon;

    $kode = mysqli_real_escape_string($kon,@$_POST['Id_pengajuan']);
    $barang = mysqli_real_escape_string($kon,@$_POST['barang']);
    $kategori = mysqli_real_escape_string($kon,@$_POST['kategori']);
    $keterangan = mysqli_real_escape_string($kon,@$_POST['keterangan']);
    $status = mysqli_real_escape_string($kon,@$_POST['status']);
    
    $SQL = "UPDATE tb_pengajuan SET
    id_pengajuan = '$kode',
    id_barang = '$barang',
    id_kategori = '$kategori',
    keterangan = '$keterangan',
    status_pengajuan = '$status' WHERE tb_pengajuan.id_pengajuan='$kode'";
   mysqli_query ($kon,$SQL);
   return mysqli_affected_rows($kon);
}
function pengaduan_tambah($data){
  global $kon;

  $kode = mysqli_real_escape_string($kon,@$_POST['Id_pengaduan']);
  $keterangan = mysqli_real_escape_string($kon,@$_POST['Keterangan']);
  $barang = mysqli_real_escape_string($kon,@$_POST['Barang']);
  $kategori = mysqli_real_escape_string($kon,@$_POST['kategori']);
  $ruangan = mysqli_real_escape_string($kon,@$_POST['Ruangan']);
  $foto_sebelum = mysqli_real_escape_string($kon,@$_POST['Foto_sebelum']);
  $foto_sesudah = mysqli_real_escape_string($kon,@$_POST['Foto_sesudah']);
  $nis = mysqli_real_escape_string($kon,@$_POST['Nis']);
  
  
  $SQL = "INSERT INTO tb_pengaduan_kondisi SET
  id_pengaduan = '$kode',
  keterangan = '$keterangan',
  id_barang = '$barang',
  id_kategori = '$kategori',
  id_ruangan = '$ruangan',
  foto_sebelum = '$foto_sebelum',
  foto_sesudah ='$foto_sesudah',
  nis = '$nis'";

 mysqli_query ($kon,$SQL);
 return mysqli_affected_rows($kon);
}
function pengaduan_edit($data){
  global $kon;

  $kode = mysqli_real_escape_string($kon,@$_POST['Id_pengaduan']);
  $keterangan = mysqli_real_escape_string($kon,@$_POST['Keterangan']);
  $barang = mysqli_real_escape_string($kon,@$_POST['Barang']);
  $kategori = mysqli_real_escape_string($kon,@$_POST['kategori']);
  $ruangan = mysqli_real_escape_string($kon,@$_POST['Ruangan']);
  $foto_sebelum = mysqli_real_escape_string($kon,@$_POST['Foto_sebelum']);
  $foto_sesudah = mysqli_real_escape_string($kon,@$_POST['Foto_sesudah']);
  $nis = mysqli_real_escape_string($kon,@$_POST['Nis']);
  
  
  $SQL = "UPDATE tb_pengaduan_kondisi SET
  id_pengaduan = '$kode',
  keterangan = '$keterangan',
  id_barang = '$barang',
  id_kategori = '$kategori',
  id_ruangan = '$ruangan',
  foto_sebelum = '$foto_sebelum',
  foto_sesudah ='$foto_sesudah',
  nis = '$nis' WHERE tb_pengaduan_kondisi.id_pengaduan='$kode'";
 mysqli_query ($kon,$SQL);
 return mysqli_affected_rows($kon);
}
function pengaduan_hapus($data){
  global $kon;

$id=$_GET['id'];
  mysqli_query($kon, "DELETE FROM tb_pengaduan_kondisi WHERE tb_pengaduan_kondisi.id_pengaduan='$id'");
  return mysqli_affected_rows($kon);


}

function perbaharui($data){
  global $kon;

$id = mysqli_real_escape_string($kon,@$_POST['Id_sekolah']);
$nama = mysqli_real_escape_string($kon,@$_POST['Nama_sekolah']);
$alamat = mysqli_real_escape_string($kon,@$_POST['Alamat']);
$telepon = mysqli_real_escape_string($kon,@$_POST['Telepon']);

    $SQL="UPDATE tb_setting SET
    nama_sekolah= '$nama',
    alamat= '$alamat',
    telepon = '$telepon'
    WHERE tb_setting.id_setting='$id' ";
    mysqli_query($kon,$SQL) ; 
    return mysqli_affected_rows($kon);

}

function perbaharui_logo($data){
  global $kon;

$id = mysqli_real_escape_string($kon,@$_POST['Id_sekolah']);
$logo = @$_FILES['Logo'] ['tmp_name'];
$target ='../images/logo/';
$gambar_logo = @$_FILES['Logo'] ['name'];

    $update_logo= move_uploaded_file($logo,$target.$gambar_logo);

    $SQL="UPDATE tb_setting SET path_logo ='$gambar_logo' WHERE tb_setting.id_setting='$id' ";
        mysqli_query($kon,$SQL) ; 
        return mysqli_affected_rows($kon);

}

function kategori_tambah($data){
  global $kon;
  global $tgl;

  $kode = mysqli_real_escape_string($kon,@$_POST['Id_kategori']);
  $nama = mysqli_real_escape_string($kon,@$_POST['Nama_kategori']);
      

  $SQL="INSERT INTO tb_kategori SET
    id_kategori = '$kode',
    nama_kategori = '$nama',
    created_at = '$tgl' ";
mysqli_query($kon,$SQL) ; 
return mysqli_affected_rows($kon);

}
function kategori_edit($data){
  global $kon;

  $kode = mysqli_real_escape_string($kon,@$_POST['Id_kategori']);
  $nama = mysqli_real_escape_string($kon,@$_POST['Nama_kategori']);

    $SQL="UPDATE tb_kategori SET nama_kategori ='$nama' WHERE tb_kategori.id_kategori='$kode' ";
    mysqli_query($kon,$SQL) ; 
    return mysqli_affected_rows($kon);
}

function kategori_delete($data){
  global $kon;
$id=$_GET['id_kategori'];
  mysqli_query($kon, "DELETE FROM tb_kategori WHERE tb_kategori.id_kategori='$id'");
  return mysqli_affected_rows($kon);
}

// RUANGAN

function ruangan_tambah($data){
  global $kon;
  global $tgl;

  $kode = mysqli_real_escape_string($kon,@$_POST['Id_ruangan']);
  $nama = mysqli_real_escape_string($kon,@$_POST['Nama_ruangan']);
      

  $SQL="INSERT INTO tb_ruangan SET
    id_ruangan = '$kode',
    nama_ruangan = '$nama',
    created_at = '$tgl' ";
mysqli_query($kon,$SQL) ; 
return mysqli_affected_rows($kon);

}

function ruangan_edit($data){
  global $kon;

$kode = mysqli_real_escape_string($kon,@$_POST['Id_ruangan']);
$nama = mysqli_real_escape_string($kon,@$_POST['Nama_ruangan']);

    $SQL="UPDATE tb_ruangan SET nama_ruangan ='$nama' WHERE tb_ruangan.id_ruangan='$kode' ";
    mysqli_query($kon,$SQL) ; 
    return mysqli_affected_rows($kon);
}

function ruangan_delete($data){
  global $kon;
$id=$_GET['id_ruangan'];
  mysqli_query($kon, "DELETE FROM tb_ruangan WHERE tb_ruangan.id_ruangan='$id'");
  return mysqli_affected_rows($kon);
}

function databarang_tambah($data){
  global $kon;

$kode = mysqli_real_escape_string($kon,@$_POST['Id_barang']);
$nama = mysqli_real_escape_string($kon,@$_POST['Nama_barang']);
$id_ruangan = mysqli_real_escape_string($kon,@$_POST['Id_ruangan']);
$kategori = mysqli_real_escape_string($kon,@$_POST['Kategori']);
$kondisi = mysqli_real_escape_string($kon,@$_POST['Kondisi']);
$kode_dana = mysqli_real_escape_string($kon,@$_POST['Kode_dana']);
$nomor_seri = mysqli_real_escape_string($kon,@$_POST['Nomor_seri']);
  
  
  $SQL = "INSERT INTO tb_databarang SET
  id_barang = '$kode',
  nama_barang = '$nama',
  id_ruangan = '$id_ruangan',
  id_kategori = '$kategori',
  kondisi = '$kondisi',
  kode_dana = '$kode_dana',
  no_seri ='$nomor_seri'";


 mysqli_query ($kon,$SQL);
 return mysqli_affected_rows($kon);
}

function databarang_edit($data){
  global $kon;

$kode = mysqli_real_escape_string($kon,@$_POST['Id_barang']);
$nama = mysqli_real_escape_string($kon,@$_POST['Nama_barang']);
$id_ruangan = mysqli_real_escape_string($kon,@$_POST['Id_ruangan']);
$kategori = mysqli_real_escape_string($kon,@$_POST['Kategori']);
$kondisi = mysqli_real_escape_string($kon,@$_POST['Kondisi']);
$kode_dana = mysqli_real_escape_string($kon,@$_POST['Kode_dana']);
$nomor_seri = mysqli_real_escape_string($kon,@$_POST['Nomor_seri']);

   $SQL = "UPDATE tb_databarang SET
  id_barang = '$kode',
  nama_barang = '$nama',
  id_ruangan = '$id_ruangan',
  id_kategori = '$kategori',
  kondisi = '$kondisi',
  kode_dana = '$kode_dana',
  no_seri ='$nomor_seri' WHERE tb_databarang.id_barang='$kode'";
 mysqli_query ($kon,$SQL);
 return mysqli_affected_rows($kon);

}
function barang_hapus($data){
  global $kon;
$id=$_GET['id_barang'];
  mysqli_query($kon, "DELETE FROM tb_databarang WHERE tb_databarang.id_barang='$id'");
  return mysqli_affected_rows($kon);
}

function bm_tambah($data){
  global $kon;

$kode = mysqli_real_escape_string($kon,@$_POST['Id_barang_masuk']);
$id_barang = mysqli_real_escape_string($kon,@$_POST['Id_barang']);
$nama = mysqli_real_escape_string($kon,@$_POST['Nama_barang']);
$kategori = mysqli_real_escape_string($kon,@$_POST['Kategori']);
$jumlah = mysqli_real_escape_string($kon,@$_POST['Jumlah_barang']);
$nomor_seri = mysqli_real_escape_string($kon,@$_POST['Nomor_seri']);
  
  
  $SQL = "INSERT INTO tb_barang_masuk SET
  id_masuk_barang = '$kode',
  id_barang = '$id_barang',
  nama_bm = '$nama',
  id_kategori = '$kategori',
  jumlah_bm = '$jumlah',
  no_seri ='$nomor_seri'";


 mysqli_query ($kon,$SQL);
 return mysqli_affected_rows($kon);
}

?>