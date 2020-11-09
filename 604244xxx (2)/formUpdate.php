<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  include 'connect.php';
  $id = $_GET["id"];
  $path = $_GET["path"];
  
  $sql = "select * from member where id_member=".$id;
  $result = mysqli_query($connect,$sql) or die(mysql_error());
  $row=mysqli_fetch_array($result);//ดึงข้อมูลออกมาจาก array $result ทีละ record 
  ?>
<form action="update.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="714" border="2">
    <tr>
      <td height="51" colspan="3" align="center">แบบฟอร์มแก้ไขข้อมูล</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CC6633">step : 1 ข้อมูล login</td>
    </tr>
    <tr>
      <td width="133">username :</td>
      <td width="314"><input name="username" type="text" id="username" value="<?php echo $row["username"]; ?>" size="50" /></td>
      <td width="243" rowspan="2" align="center">หมายเหตุ : ระบบจะใช้ username ในการเข้าสู่ระบบครั้งต่อไป</td>
    </tr>
    <tr>
      <td>password :</td>
      <td><input name="password" type="text" id="password" value="<?php echo $row["password"]; ?>" size="50" /></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CC6633">step : 2 ข้อมูลส่วนตัว</`td>
    </tr>
    <tr>
      <td>ชื่อ - สกุล :</td>
      <td><input name="name" type="text" id="name" value="<?php echo $row["name"]; ?>" size="50" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>เพศ :</td>
      <td><p>
        <label>
          <input name="gender" type="radio" id="gender_0" value="1" 
          	<?php 
			if ($row["gender"]==1){
				?>
                checked
                 <?php
			}
			?>
          />
          ชาย</label>
        <label>
          <input type="radio" name="gender" value="2" id="gender_1" 
          <?php 
			if ($row["gender"]==2){
				?>
                checked
                 <?php
			}
			?>
          />
          หญิง</label>
        <br />
      </p></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>การศึกษาสูงสุด :</td>
      <td><select name="graduate" id="graduate">
        <option value="1"
        <?php 
			if ($row["graduate"]==1){
				?>
                selected
                 <?php
			}
			?>
        >มัธยมปลาย</option>
        <option value="2"
        <?php 
			if ($row["graduate"]==2){
				?>
                selected
                 <?php
			}
			?>
        >ปริญญาตรี</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>ความสามารถพิเศษ :</td>
      <td><input name="sport" type="checkbox" id="sport" value="1"
      	<?php 
			if ($row["sport"]==1){
				?>
                checked
                 <?php
			}
			?>
       />
        กีฬา 
        <input name="sport2" type="checkbox" id="sport2" value="1" 
        <?php 
			if ($row["music"]==1){
				?>
                checked
                 <?php
			}
			?>
        />
        ดนตรี 
        <input name="sport3" type="checkbox" id="sport3" value="1" 
        <?php 
			if ($row["computer"]==1){
				?>
                checked
                 <?php
			}
			?>
        />
        คอมพิวเตอร์</td>
      <td align="center">ตอบได้มากกว่า 1 ข้อ</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CC6633">step : 3 อัพโหลดเอกสาร</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>
      <label for="upload"></label>
      </p>
      <img src="<?php echo $row["upload"];?>" width="200" height="200" />
      <p>
      <input name="upload" type="file" id="upload" size="40" />
      </p>
      </td>
      <td align="center">อัพโหลดเฉพาะไฟล์</td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input type="submit" name="button" id="button" value="แก้ไข" />
      &nbsp;&nbsp;&nbsp;
      <input name="id" type="hidden" id="id" value="<?php echo $row["id_member"];?>" />
      <input name="path" type="hidden" id="path" value="<?php echo $row["upload"];?>" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>