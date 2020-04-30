<?php
include_once('conn.php');
$sql = "CREATE TABLE groupp (ID_group int(9) NOT NULL auto_increment
		,name_g varchar(9)NOT NULL 
		,status_g varchar(15)NOT NULL 
		,CONSTRAINT pk_course PRIMARY KEY(ID_group));";
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