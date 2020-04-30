<?php
include_once('conn.php');
$sql = "CREATE TABLE standard (num_std int(9) NOT NULL auto_increment
		,ID_std varchar(9)NOT NULL 
		,name_std varchar(100)NOT NULL 
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