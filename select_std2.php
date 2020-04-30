<form method="get" id="form" enctype="multipart/form-data" action="" ><br>
<strong><center>ข้อมูลรายการย่อยมาตรฐานการเรียนรู้</strong></center><br><br>
    <strong><center>ค้นหาข้อมูล</strong>
    <input type="text" name="search" size="30" value="">
    <input type="submit" value="ค้นหาข้อมูล"><br><br>
	ตารางแสดงข้อมูลรายการย่อยมาตรฐานการเรียนรู้</center>
</form>
<?php
$date = date("l d F Y");
echo "Todey : $date"."<BR>";
include_once('conn.php');
$search = isset($_GET['search']) ? $_GET['search']:'';
$sql = "SELECT * FROM std2 WHERE name_std2_mini LIKE '%$search%'";
$result = mysqli_query($conn,$sql)
	or die ("Error cannot select data".mysqli_error($conn));
	echo "<table border=3px 
			bordercolor=#DOE7A3
			bgcolor=#FFFFCC
			align=center>";
	echo "<tr align = center>";
	echo "<th>มาตรฐานการเรียนรู้</th>";
	echo "<th>รหัสมาตรฐานย่อย</th>";
	echo "<th>ชื่อมาตรฐานการเรียนรู้ย่อย</th>";
	echo "<th>อัพเดท</th>";
	echo "<th>ลบ</th>";
	echo "</tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr align=center>";
	echo "<td>".$row['ID_std2']."</td>";
	echo "<td>".$row['ID_std2_mini']."</td>";
	echo "<td>".$row['name_std2_mini']."</td>";
	echo "<td><a href='update_form_std2.php?num_std2=".$row['num_std2']."'>
	<img src='edit.png' width='20px' height='20px'></a></td>";
	echo "<td><a href='delete_std2.php?num_std2=".$row['num_std2']."'
	onclick='return confirm(\"คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?\")'>
	<img src='delete.png' width='20px' height='20px'></a></td>";
	echo "</tr>";
}
echo "</table>"."<br>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<center><a href='insert_form_std2.php'>ย้อนกลับ</a></center>