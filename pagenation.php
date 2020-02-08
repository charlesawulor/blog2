<?php
$query = "select * from posttbl";
$result = mysqli_query($conn,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo"
<center>
<div class='w3-bar'>
 <a href='index.php?page=1' class='w3-button w3-red'>previous</a>
 
 ";
 
 for($i=1; $i<$total_pages; $i++){
	 
	 echo"
	 
	 <a href='index.php?page=$i' class='w3-button'>$i</a>
	 
	 ";
	 
 }
 
 echo "
 <a href='index.php?page=$total_pages' class='w3-button w3-red'>next</a>
 
 </div>
 </center>
 '
 ";
 
 ?>
 