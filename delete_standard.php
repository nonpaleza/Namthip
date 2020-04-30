<?php
include_once('conn.php');
$num_std = $_GET['num_std'];
$sql = "delete from standard
		where num_std = '$num_std'";
$result=mysqli_query($conn,$sql);
if ($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select_standard.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select_standard.php';
			</script>";
}
mysqli_close($conn);
?>