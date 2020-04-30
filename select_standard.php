<form method="get" id="form" enctype="multipart/form-data" action="" ><br>
<strong><center>ข้อมูลมาตรฐานการเรียนรู้ หมวดวิชาศึกษาทั่วไป</strong></center><br><br>
    <strong><center>ค้นหาข้อมูล</strong>
    <input type="text" name="search" size="30" value="">
    <input type="submit" value="ค้นหาข้อมูล"><br><br>
	ตารางแสดงข้อมูลมาตรฐานการเรียนรู้ หมวดวิชาศึกษาทั่วไป</center>
</form>
<?php
$date = date("l d F Y");
echo "Todey : $date"."<BR>";
include_once('conn.php');
$search = isset($_GET['search']) ? $_GET['search']:'';
$sql = "SELECT * FROM standard WHERE ID_std LIKE '%$search%'";
$result = mysqli_query($conn,$sql)
	or die ("Error cannot select data".mysqli_error($conn));
	echo "<table border=3px 
			bordercolor=#DOE7A3
			bgcolor=#FFFFCC
			align=center>";
	echo "<tr align = center>";
	echo "<th>รหัสมาตรฐาน</th>";
	echo "<th>ชื่อมาตรฐานการเรียนรู้</th>";
	echo "<th>อัพเดท</th>";
	echo "<th>ลบ</th>";
	echo "</tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr align=center>";
	echo "<td>".$row['ID_std']."</td>";
	echo "<td>".$row['name_std']."</td>";
	echo "<td><a href='update_form_standard.php?num_std=".$row['num_std']."'>
	<img src='edit.png' width='20px' height='20px'></a></td>";
	echo "<td><a href='delete_standard.php?num_std=".$row['num_std']."'
	onclick='return confirm(\"คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?\")'>
	<img src='delete.png' width='20px' height='20px'></a></td>";
	echo "</tr>";
}
echo "</table>"."<br>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<center><a href='insert_form_standard.php'>ย้อนกลับ</a></center>