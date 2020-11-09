<?php
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"register") or die(mysqli_error());
mysqli_query($connect,"SET NAMES UTF8");
?>