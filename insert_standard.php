<center><br><br><br><br><br><br><br><br><br>
<?php
include_once('conn.php');
   if (empty ($_POST['ID_std'])){
        echo "กรุณากรอก ข้อมูลมาตรฐานการเรียนรู้ หมวดวิชาศึกษาทั่วไป";
        exit();
    } else {
        $ID_std = mysqli_real_escape_string($conn, $_POST['ID_std']); /*คำสั่งนี้ mysqli_real_escape_string เป็นการกันระบบสำหรับคนที่ไม่หวังดีมาทำลาย*/
}
$ID_std= $_POST['ID_std'];
$name_std = $_POST['name_std'];
$sql = "insert into standard (ID_std,name_std) values('$ID_std','$name_std')";
  //echo $sql."<BR>";
    $result= mysqli_query($conn, $sql);	
    if ($result) { 
        echo "เพิ่มข้อมูลเรียบร้อย";
    } else {
        echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($conn);
}
mysqli_close($conn);

?>
<br><br><a href='select_standard.php'>ข้อมูลมาตรฐานการเรียนรู้ หมวดวิชาศึกษาทั่วไป</a></center>