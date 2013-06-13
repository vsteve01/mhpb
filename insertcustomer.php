<html>
<Head>
<Title>
Home
</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<BODY>

<?php
include 'connect.php';


$sql="insert into customer (cstFName, cstLName, cstAddr1, cstCityLid, cstStateLid, cstZip, cstHphone, cstMphone, cstEmail)
values
('$_POST[cstFName]','$_POST[cstLName]','$_POST[cstAddr1]','$_POST[cstCityLid]','$_POST[cstStateLid]','$_POST[cstZip]','$_POST[cstHphone]','$_POST[cstMphone]','$_POST[cstEmail]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$customerid=mysqli_insert_id($con);

$result = mysqli_query($con,"select * from customer where cstid = $customerid");

$row = mysqli_fetch_array($result);
?>
<TABLE>
<tr>
<td><input name="cstFName" type="text" value="<?php echo $row['cstFName'];?>" maxlength="100" id="cstFName" /> 
<input name="cstLName" type="text" value="<?php echo $row['cstLName'];?>" maxlength="100" id="cstLName" />
</td>
</tr>
<tr>
<td><input name="cstAddr1" type="text" value="<?php echo $row['cstAddr1'];?>" maxlength="100" id="cstAddr1" />
</td>
<td><input name="cstCityLid" type="text" value="<?php echo $row['cstCityLid'];?>" maxlength="100" id="cstCityLid" />
</td>
</tr>
<tr>
<td><input name="cstStateLid" type="text" value="<?php echo $row['cstStateLid'];?>" maxlength="100" id="cstStateLid" />
</td>
</tr>
</TABLE>
<?php
mysqli_close($con);
?>
</body>
</html>
