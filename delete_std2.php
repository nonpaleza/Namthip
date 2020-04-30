<?php
include_once('conn.php');
$num_std2 = $_GET['num_std'];
$sql = "delete from std2
		where num_std2 = '$num_std2'";
$result=mysqli_query($conn,$sql);
if ($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select_std2.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select_std2.php';
			</script>";
}
mysqli_close($conn);
?>