<?php
    require 'conn.php';
   ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>ข้อมูลมาตรฐานการเรียนรู้ หมวดวิชาศึกษาทั่วไป</title>
        <style>
            label{
                display: block;
            }
        </style>
    </head>
<body>
<form action="insert_standard.php" method="post"><br>
<strong><center>ข้อมูลมาตรฐานการเรียนรู้ หมวดวิชาศึกษาทั่วไป</strong></center><br><br>
<strong><center>
<table align = center width = "30%" border = "0">
<table align = center width = "30%" border = "0">
<tr><td align=right><label> รหัสมาตรฐานการเรียนรู้: </td><td><input name="ID_std" type="text" id="ID_std" size="20"></td></tr></label>
<tr><td align=right><label></td></label></tr>
<tr><td></td><td></td></tr>
<tr><td align=right><label>ชื่อมาตรฐานการเรียนรู้  : </td><td><input name="name_std" type="text" id="name_std" size="20"></td></tr></label>
<tr><td align=right><label></td></label></tr>
<tr><td></td><td></td></tr>
	<td><input type="submit" value="บันทึก">
	<input type="reset" value="ยกเลิก"><br><br></td></tr>
	</table><br>
</center>
</form>
</body>
</html>