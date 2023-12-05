<?php 
include "konek.php"; 
$id = $_GET['id']; 
 
$query = "DELETE FROM tb_barang WHERE id = $id"; 
mysqli_query($kon, $query); 
 
?> 
<script language="JavaScript"> 
document.location='index.php'</script> 
<?php 
?>