<BR>
<?php  //update_form_standard.php
include_once('conn.php');
$num_std = $_GET["num_std"];
$sql = ("SELECT * FROM standard
		WHERE num_std = $num_std");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$ID_std = $row["ID_std"];
	$name_std = $row["name_std"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_standard.php" method="post">
<input type="hidden" name="num_std" value=<?php echo $num_std;?>>
<center><b><u>อัพเดทข้อมูลมาตรฐานการเรียนรู้ หมวดวิชาศึกษาทั่วไป</b></u><br><br>
รหัสมาตรฐานการเรียนรู้ : <input type="text"
				name="ID_std" 
				value=<?php echo $ID_std; ?>><br><br>
ชื่อมาตรฐานการเรียนรู้ : <input type="text"
				name="name_std" 
				value=<?php echo $name_std; ?>><br><br>
<input type= "submit" value="อัพเดต">
<input type= "reset" value="ยกเลิก">
</center>
</form>
</body>
