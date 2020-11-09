<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>ชื่อ-สกุล
    <input name="textfield" type="text" id="textfield" size="50" maxlength="30" />
  </p>
  <p>เพศ 
    <label>
      <input type="radio" name="gender" value="0" id="gender_0" />
      ชาย</label>
    <input type="radio" name="gender" value="1" id="gender_1" />
    <label>หญิง</label>
<br />
    <br />
  แหล่งข้อมูล</p>
  <p>
    <input type="checkbox" name="checkbox" id="checkbox" />
  line 
  <input type="checkbox" name="checkbox2" id="checkbox2" />
  facebook 
  <input type="checkbox" name="checkbox3" id="checkbox3" />
  IG</p>
  <p>จังหวัด 
    <select name="select" id="select">
      <option value="0">กทม.</option>
      <option value="1">เพชรบุรี</option>
      <option value="2">ประจวบคีรีขันธ์</option>
    </select>
  </p>
  <p>
    <input name="fileField" type="file" id="fileField" size="50" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="ตกลง" />
    <input type="reset" name="button2" id="button2" value="ยกเลิก" />
  </p>
</form>
</body>
</html>