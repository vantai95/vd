<?php 
	$kq=$tintuc ->getQuangcao(1);
	while ($row=mysqli_fetch_array($kq)) {
	
 ?>
<img width="280" src="upload/quangcao/<?php echo $row['urlHinh']; ?>" />
<div style="height:10px"></div>

<?php } ?>
