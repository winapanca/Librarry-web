<?php
$tmp = $_FILES['berkas']['tmp_name'];
$name = $_FILES['berkas']['name'];
$type = $_FILES['berkas']['type'];
$size = $_FILES['berkas']['size'];
$dir_upload= "upload/$name";
if($name){
	if(move_uploaded_file($tmp,$dir_upload)){
		echo "Berhasil Mengupload Berkas";
		echo "<br>";
		echo "Name File : ".$name;
		echo "<br>";
		echo "ukuran File : ".$size;
		echo "<br>";
		echo "Type File : ".$type;
		echo "<br>";
		echo "a< href='upload.php'>kembali ke form Uploud";


	}    		
}
?>