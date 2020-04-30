<center><br><br><br><br><br><br><br><br><br>
<?php
include_once('conn.php');
   if (empty ($_POST['ID_std2'])){
        echo "กรุณากรอก ข้อมูลรายการย่อยมาตรฐานการเรียนรู้";
        exit();
    } else {
        $ID_std2 = mysqli_real_escape_string($conn, $_POST['ID_std2']); /*คำสั่งนี้ mysqli_real_escape_string เป็นการกันระบบสำหรับคนที่ไม่หวังดีมาทำลาย*/
}
$ID_std2= $_POST['ID_std2'];
$ID_std2_mini= $_POST['ID_std2_mini'];
$name_std2_mini = $_POST['name_std2_mini'];
$sql = "insert into std2 (ID_std2,ID_std2_mini,name_std2_mini) values('$ID_std2','$ID_std2_mini','$name_std2_mini')";
  //echo $sql."<BR>";
    $result= mysqli_query($conn, $sql);	
    if ($result) { 
        echo "เพิ่มข้อมูลเรียบร้อย";
    } else {
        echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($conn);
}
mysqli_close($conn);

?>
<br><br><a href='select_std2.php'>ข้อมูลรายการย่อยมาตรฐานการเรียนรู้</a></center>