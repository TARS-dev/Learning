<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include 'connect.php';
$id = $_POST["id"];
$path = $_POST["path"];
$username =$_POST["username"];
$password = $_POST["password"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$graduate = $_POST["graduate"];
$sport = $_POST["sport"];
$music = $_POST["sport2"];
$computer = $_POST["sport3"];
$upload = $_POST["upload"];
if($_FILES["upload"]["name"]==NULL){
    $upload = $path;
}else{
    $show = explode("/",$path);
    //ฟังก์ชัน explode แยกสัญลักษณ์ต่างๆออกจากข้อความ
    //แบ่งข้อความเก็บไว้ในตัวแปรอาร์เรย์ $show[0]."/".$show[1]."/".show[2];
    //$_FILES["upload"]["name"]; แสดงชื่อ file ที่ upload เข้าไป
    $upload = $show[0]."/".$show[1]."/".$_FILES["upload"]["name"];
    @unlink($path);//@unlink(filename) คือการลบ file
}
move_uploaded_file($_FILES["upload"]["tmp_name"],$upload);
$sql = "update member set username='$username',password='$password',name='$name',gender='$gender',graduate='$graduate',sport='$sport',music='$music',computer='$computer',upload='$upload' where id_member='$id'";
$result = mysqli_query($connect,$sql);
if($result){
    echo "แก้ไขข้อมูลลง database เรียบร้อย";
}else{
    die(mysqli_error());
}
?>
<body>
</body>
</html>