<?php  //update_form.php
include_once('conn.php');
$ID_group = $_GET["ID_group"];
$sql = ("SELECT
			name_g
			,status_g
		FROM groupp
		WHERE ID_group = $ID_group");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$group = $row["name_g"];
	$Status = $row["status_g"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<html>
<head>
<title>update</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="update.php" method="post">
  <p>&nbsp;</p>
  <p>
    <!-- Save for Web Slices (update.psd) -->
  </p>
  <table width="1001" height="501" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
    <tr>
      <td colspan="8"><img src="images/update_01.jpg" width="1000" height="227" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="227" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="5"><img src="images/update_02.jpg" width="426" height="155" alt=""></td>
      <td colspan="3"><input type="text" name="name_g" id="name_g" style="width:186px;height:28px;"></td>
      <td colspan="3" rowspan="4"><img src="images/update_04.jpg" width="388" height="154" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="28" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/update_05.jpg" width="186" height="38" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="38" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><select name="status_g" id="status_g" style="width:186px;height:27px;">
          <option value="4 ปี">4 ปี</option>
          <option value="เทียบโอนปกติ">เทียบโอนปกติ</option>
          <option value="เทียบโอนสมทบ">เทียบโอนสมทบ</option>
      </select></td>
      <td><img src="images/spacer.gif" width="1" height="27" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/update_07.jpg" width="186" height="61" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="61" alt=""></td>
    </tr>
    <tr>
      <td colspan="2"><img src="images/update_08.jpg" width="93" height="1" alt=""></td>
      <td colspan="2" rowspan="3"><img src="images/update_09.jpg" width="102" height="36" alt=""></td>
      <td colspan="2" rowspan="3"><img src="images/update_10.jpg" width="379" height="36" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3"><img src="images/update_11.jpg" width="390" height="118" alt=""></td>
      <td colspan="2"><input type="image" name="imageField" id="imageField" src="images/update_12.jpg"></td>
      <td rowspan="3"><img src="images/update_13.jpg" width="29" height="118" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="34" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2"><img src="images/update_14.jpg" width="100" height="84" alt=""></td>
      <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/update_15.jpg" width="392" height="83" alt=""></td>
      <td><a href="select.php"><img src="images/update_16.jpg" width="89" height="83" alt=""></a></td>
      <td><img src="images/spacer.gif" width="1" height="83" alt=""></td>
    </tr>
    <tr>
      <td><img src="images/spacer.gif" width="390" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="36" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="64" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="29" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="93" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="9" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="290" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="89" height="1" alt=""></td>
      <td></td>
    </tr>
  </table>
  <!-- End Save for Web Slices -->
<p>
  <input type="hidden" name="ID_group" value=<?php echo $ID_group;?>>
</p>
</form>
</body>
</html>