<?php
include_once('conn.php');
$num_std2 = $_POST["num_std2"];
$ID_std2 = $_POST["ID_std2"];
$ID_std2_mini = $_POST["ID_std2_mini"];
$name_std2_mini = $_POST["name_std2_mini"];
$sql = "update std2 set 
			ID_std2 = '$ID_std2'
		,	ID_std2_mini = '$ID_std2_mini'
		,	name_std2_mini = '$name_std2_mini'
		WHERE num_std2 = $num_std2; ";  
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_std2.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select_std2.php';
			</script>";
}
mysqli_close($conn);
?>