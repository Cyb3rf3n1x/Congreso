<?php
	$files = $_FILES;
	$id_prov = $_POST['idproveedor'];
	$urlDoc = "";
	$docName = "";

	foreach ($files as $file) {
		$urlDoc = $file['tmp_name'];
		$docName = $file['name'];
	}

	$urlcarpeta = 'docs_usu/'.$id_prov;

	if(!file_exist($urlcarpeta)){
		mkdir($urlcarpeta,0777);
	}
	else{
		$urlFile = $urlcarpeta . "/" . $docName;
		//locahost/ABC/docs_usu/1/reporte.pdf
		$urlCompleto = "localhost/ABC/". $urlFile;
		if(!file_exists($urlFile)){
			move_uploaded_file($urlDoc,$urlCompleto);
			return true;
		}
		else{
			return false;
		}
	}
?>
