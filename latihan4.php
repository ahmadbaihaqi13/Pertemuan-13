<?php
$i = trim($_GET[id]);
?>
<div align="center">
 <h3>
 <a href="?menu=artikel&id=<?php echo $i;?>">
 <?php echo $data[$i]['judul'];?>
 </a>
 </h3>
</div>
<div align="justify">
 <?php 
 echo $data[$i]['isi'];
 ?>
</div>