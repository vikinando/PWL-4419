<?php
session_start();

include "koneksi.php";
$id=$_GET['id']; 

$sql = "select foto from barang where id='$id'";
$hasil=$conn->query($sql);  

while ($row=$hasil->fetch_assoc()){
 $foto=$row['foto'];   
}

if ($foto!=""){
	unlink("img/".$foto);	  
}	 

$sql = "delete from barang where id='$id'";

if ($conn->query($sql) === TRUE) {
  $conn->close(); 
  header("location:manage.php");  
}else{
  $conn->close();  
  echo "New records failed";
} 
?>