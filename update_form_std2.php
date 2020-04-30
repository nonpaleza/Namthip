<BR>
<?php  //update_form_std2.php
include_once('conn.php');
$num_std2 = $_GET["num_std2"];
$sql = ("SELECT * FROM std2
		WHERE num_std2 = $num_std2");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$ID_std2 = $row["ID_std2"];
	$ID_std2_mini = $row["ID_std2_mini"];
	$name_std2_mini = $row["name_std2_mini"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_std2.php" method="post">
<input type="hidden" name="num_std2" value=<?php echo $num_std2;?>>
<center><b><u>อัพเดทข้อมูลรายการย่อยมาตรฐานการเรียนรู้</b></u><br><br>
มาตรฐานการเรียนรู้ <select name="ID_std2" id="ID_std2">
          <option value="11">11</option>
          <option value="21">21</option>
          <option value="31">31</option>
		  <option value="41">41</option>
		  <option value="51">51</option></select></td></tr></label>	<br><br>
รหัสมาตรฐานย่อย  :<input type="text"
				name="ID_std2_mini" 
				value=<?php echo $ID_std2_mini; ?>><br><br>
ชื่อมาตรฐานการเรียนรู้ย่อย  :<input type="text"
				name="name_std2_mini" 
				value=<?php echo $name_std2_mini; ?>><br><br>
<input type= "submit" value="อัพเดต">
<input type= "reset" value="ยกเลิก">
</center>
</form>
</body>
