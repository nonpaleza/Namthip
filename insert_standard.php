<?php
include_once('conn.php');
$standard_id= $_POST['standard_id'];
$standard_name= $_POST['standard_name'];
if($standard_id=="" || empty($standard_id)|| $standard_name=="" || empty($standard_name))
{
	echo "กรุณากรอกข้อมูลให้ครบถ้วน";
	echo "<script language='Javascript'>
			alert('กรุณากรอกข้อมูลให้ครบถ้วน')
			window.location='insert_from_standard.php';
			</script>";
}else{
$sql = "insert into standard(standard_id,standard_name)
values('$standard_id','$standard_name')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('เพิ่มข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_standard.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถเพิ่มข้อมูลได้')
			</script>";
}
}
mysqli_close($conn);
?>