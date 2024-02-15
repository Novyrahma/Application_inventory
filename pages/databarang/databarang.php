<?php

@$aksi= $_GET['aksi'];

switch ($aksi) {
	 case 'tampil':
		include "tampil.php";
		break;
     case 'tambah':
		include "tambah.php";
		break;
	case 'edit':
		include "edit.php";
		break;
	case 'delete':
		include "delete.php";
		break;
	case 'proses_delete':
		include "proses_delete.php";
		break;	
		case 'proses_edit':
			include "proses_edit.php";
			break;
 


	default:
		include "tampil.php";
		break;
}