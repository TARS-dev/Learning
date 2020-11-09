<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td {
	text-align: center;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="insert2db.php" >
  <table width="542" height="245" border="2">
    <tr>
      <td colspan="3">แบบฟอร์มการสมัครแข่งขันกีฬา</td>
    </tr>
    <tr>
      <td width="131">ชื่อ-นามสกุล</td>
      <td width="255"><input name="name" type="text" id="name" maxlength="10" /></td>
      <td width="132">หมายเหตุ:สามารถใส่ได้ไม่เกิน 10 ตัวอักษร</td>
    </tr>
    <tr>
      <td>ประเภทบุคลากร</td>
      <td><label for="type_id"></label>
        <label for="type_id"></label>
        <select name="type_id" id="type_id">
          <option value="1">อาจารย์</option>
          <option value="2">นักศึกษา</option>
 
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>สาขาวิชา</td>
      <td><label for="major"></label>
        <label for="major"></label>
        <select name="major" id="major">
          <option value="1">วิทยาการคอมพิวเตอร์</option>
          <option value="2">ความปลอดภัยไซเบอร์</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>ประเภทการแข่งขัน</td>
      <td><label for="type_sport"></label>
        <label for="type_sport"></label>
        <select name="type_sport" id="type_sport">
          <option value="1">เปตอง</option>
          <option value="2">แบตมินตัน</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="reset" id="reset" value="reset" /></td>
    </tr>
  </table>
  <label for="name"></label>
</form>
</body>
</html>