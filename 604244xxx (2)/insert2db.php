<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$username = (isset($_POST["username"])) ? $_POST["username"] : '';
$password = $_POST["password"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$graduate = $_POST["graduate"];
$sport = $_POST["sport"];
$music = $_POST["sport2"];
$computer = (isset($_POST["sport3"])) ? $_POST["sport3"] : '';
$upload = (isset($_POST["upload"])) ? $_POST["upload"] : NULL;
//------------------------------------------------upload to floder
if ($_FILES["upload"]["name"]!=NULL){
	$folder = rand();//สร้าง folder ที่มีการ random ขึ้นมา
	mkdir("document/".$folder,0777);//everyone can read write exe. mkdir คือคำสั่ง make directory/การสร้าง permission php
	//ประกาศตัวแปรเก็บค่า file ที่ upload มา โดยใช้ชื่อตาม file ที่ได้ upload มา
	$upload = "document/".$folder."/".$_FILES["upload"]["name"];
	//เก็บการ upload file แต่เปลี่ยนเป็นชื่อใหม่เพื่อไม่ให้มี file ซ้ำกัน
	move_uploaded_file($_FILES["upload"]["tmp_name"],$upload);
}
include("connect.php");
$sql = "insert into member values(NULL,'$username','$password','$name','$gender','$graduate','$sport','$music','$computer','$upload')";
$result = mysqli_query($connect,$sql);
if($result){
	echo "ใส่ข้อมูลลง Database เรียบร้อยแล้ว";
	header('location:query.php');
}
else{
	die(mysql_error());
}
?>
</body>
</html>