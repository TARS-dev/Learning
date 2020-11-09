<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=query.php" />

<title>Untitled Document</title>
</head>

<body>
<?php 
include 'connect.php';
$id = $_GET["id"];
$path = $_GET["path"];
//===
if(@unlink($path)){//เป็นฟังก์ชันลบไฟล์
	echo "ลบไฟล์สำเร็จ";
}else{
	echo "ลบไฟล์ไม่สำเร็จ";
}
$show=explode("/",$path);//ฟังก์ชั่นแยกสัญลักษณ์ต่างๆออกจากข้อความ
$dir=$show[0]."/".$show[1];//แบ่งข้อความเก็บไว้ในตัวแปรอาร์เรย์  $show[0].$show[1].$show[2]
rmdir($dir);//ฟังก์ชั่นในการลบ directory
$sql = "delete from member where id_member=".$id;
$result = mysqli_query($connect,$sql);
if($result){
	echo "ลบข้อมูลจาก database เรียบร้อย";
}else{
	die(mysqli_error());
}
?>
</body>
</html>