<?php
session_start();

include "koneksi.php";
include "uploadFoto.php";
 
$nama=$_POST['tnama'];
$hrg=$_POST['thrg'];
$ket=$_POST['tket'];
$jml=$_POST['tjml'];

if (upload_foto($_FILES["foto"])){
	$foto=$_FILES["foto"]["name"];
	$sql = "insert into barang (nama,hrg,jml,keterangan,foto) values ('$nama',$hrg,$jml,'$ket','$foto')";	  

  if ($conn->query($sql) === TRUE) {
		$conn->close();  
		header("location:manage.php");  
	}else{
		$conn->close();  
		echo "New records failed";			
	}		
}else{
	echo "Sorry, there was an error uploading your file."; 
}
?>