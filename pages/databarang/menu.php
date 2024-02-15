
<?php


@$pages= $_GET['pages'];

switch ($pages) {
	case 'kategori':
		include "../pages/kategori/kategori.php";
		break;
		case 'user':
		include "../pages/user/user.php";
		break;
		case 'peminjaman':
		include "../pages/peminjaman/peminjaman.php";
		break;
		case 'pengaduan':
		include "../pages/pengaduan/pengaduan.php";
		break;
		case 'pengajuan':
		include "../pages/pengajuan/pengajuan.php";
		break;
		case 'setting':
		include "../pages/setting/setting.php";
		break;
		case 'kategori':
		include "../pages/kategori/kategori.php";
		break;
		case 'ruangan':
		include "../pages/ruangan/ruangan.php";
		break;
		case 'databarang':
		include "../pages/databarang/databarang.php";
		break;
			case 'barang_masuk':
		include "../pages/barang_masuk/barang_masuk.php";
		break;
	
	



	default:
		include"../pages/dashboard.php";
		break;
		
}

?>