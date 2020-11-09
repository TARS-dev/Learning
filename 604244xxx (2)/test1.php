<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table width="720" border="2">
  <tr>
    <td width="72">id_member </td>
    <td width="57">username</td>
    <td width="59">password</td>
    <td width="32">name</td>
    <td width="41">gender</td>
    <td width="52">graduate</td>
    <td width="128">sport|music|computer</td>
    <td width="100">upload</td>
    <td width="54">ลบข้อมูล</td>
    <td width="40">แก้ไขข้อมูล</td>
  </tr>
  <?php
  include 'connect.php';
  $sql = "select * from member ORDER BY id_member ASC";
  $result = mysqli_query($connect,$sql) or die(mysql_error());
  while ($row=mysqli_fetch_array($result))//ดึงข้อมูลออกมาจาก array $result ทีละ record 
  {?>
  <tr>
  	<td align="center"><?php echo $row["id_member"];?></td>
    <td align="center"><?php echo $row["username"];?></td>
    <td align="center"><?php echo $row["password"];?></td>
    <td align="center"><?php echo $row["name"];?></td>
    <td align="center">
	<?php
		if($row["gender"]==1){
			echo "ผู้ชาย";
		}else{
            echo "ผู้หญิง";
		}
	?>
    </td>
    <td align="center">
	<?php
		if($row["graduate"]==1){

			echo "มัธยมปลาย";


            
		}else{
			echo "ปริญญาตรี";
		}
	?>
    </td>
    <td align="center">
	<?php if($row["sport"]==1){
		echo "กีฬา";
	}
	?>
	<?php if($row["music"]==1){
		echo "ดนตรี";
	}
	?>
	<?php if($row["computer"]==1){
		echo "คอมพิวเตอร์";
	}
	?>
    </td>
    <td align="center">
    <a href="<?php echo $row["upload"];?>">
	<img src="<?php echo $row["upload"];?>" width="100px" height="100px"> <a/>
    </td>
    <td align="center"><a href="delete.php?id=<?php echo $row["id_member"];?>&path=<?php echo $row["upload"]; ?>">ลบ</a></td>
    <td align="center"><a href="formUpdate.php?id=<?php echo $row["id_member"];?>&path=<?php echo $row["upload"]; ?>">แก้ไข</a></td>
  </tr>
  <?php
  }
  ?>
</table>
<a href="formRegis.php"><button>Back</button></a>
</body>
</html>