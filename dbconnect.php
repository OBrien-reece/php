<?php
$connect = mysqli_connect("localhost","root","","php_database");
if(!$connect){
	echo "<h3 class="text-danger">Unable to establish connection</h3>";
}
?>