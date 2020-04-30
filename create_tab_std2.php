<?php
include_once('conn.php');
$sql = "CREATE TABLE std2 (num_std2 int(9) NOT NULL auto_increment
		,ID_std2 varchar(9)NOT NULL 
		,ID_std2_mini varchar(9)NOT NULL 
		,name_std2_mini varchar(100)NOT NULL 
		,CONSTRAINT pk_course PRIMARY KEY(num_std));";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('Create tab ok');
			</script>";
}else{
	echo "<script>alert('Can\'t create');
			</script>";
}
mysqli_close($conn);
?>