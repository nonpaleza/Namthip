<?php
include_once('conn.php');
$num_std = $_POST["num_std"];
$ID_std = $_POST["ID_std"];
$name_std = $_POST["name_std"];
$sql = "update standard set 
			ID_std = '$ID_std'
		,	name_std = '$name_std'
		WHERE num_std = $num_std; ";  
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_standard.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select_standard.php';
			</script>";
}
mysqli_close($conn);
?>