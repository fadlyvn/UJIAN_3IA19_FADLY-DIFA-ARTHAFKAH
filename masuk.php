<?php 
include "konek.php";
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Barang = $_POST['Barang']; 
$NoHP = $_POST['NoHP'];
 
$query=mysqli_query($kon, "INSERT INTO tb_barang(id, Nama, Barang, NoHP)
VALUES ('$id', '$Nama', '$Barang', '$NoHP')")or die (mysqli_error()); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='index.php'</script> 
<?php 
} 
?>