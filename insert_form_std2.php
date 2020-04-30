<?php
    require 'conn.php';
   ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>ข้อมูลรายการย่อยมาตรฐานการเรียนรู้</title>
        <style>
            label{
                display: block;
            }
        </style>
    </head>
<body>
<form action="insert_std2.php" method="post"><br>
<strong><center>ข้อมูลรายการย่อยมาตรฐานการเรียนรู้</strong></center><br><br>
<strong><center>
<table align = center width = "30%" border = "0">
<table align = center width = "30%" border = "0">
<tr><td align=right><label>มาตรฐานการเรียนรู้  : </td>
		<td><select name="ID_std2" id="ID_std2">
          <option value="11">11</option>
          <option value="21">21</option>
          <option value="31">31</option>
		  <option value="41">41</option>
		  <option value="51">51</option>
      </select></td></tr></label>	
	<tr><td><b></td><tr><td align=right><label> รหัสมาตรฐานย่อย : </td><td><input name="ID_std2_mini" type="text" id="ID_std2_mini" size="20"></td></tr></label>
<tr><td align=right><label></td></label></tr>
<tr><td></td><td></td></tr>
<tr><td align=right><label>ชื่อมาตรฐานการเรียนรู้ย่อย : </td><td><input name="name_std2_mini" type="text" id="name_std2_mini" size="20"></td></tr></label>
<tr><td align=right><label></td></label></tr>
<tr><td></td><td></td></tr>
	<td><input type="submit" value="บันทึก">
	<input type="reset" value="ยกเลิก"><br><br></td></tr>
	</table><br>
</center>
</form>
</body>
</html>