<?php

//Scaneia o arquivo
$imagens = scandir("imagens");

$data = array();

//Manipula arquivos
foreach ($imagens as $img) {
	
	if (!in_array($img, array(".", ".."))) {
		
		$filename = "imagens" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);

		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

		$info["url"] = "http://localhost/PHP7/DIR/" . str_replace("\\", "/", $filename);

		array_push($data, $info);

	}

}

echo json_encode($data);

?>