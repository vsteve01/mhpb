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
printf ("New Record has id $customerid.\n");


$result = mysqli_query($con,"select * from customer where cstid = $customerid");

$row = mysqli_fetch_array($result);
?>
<TABLE class="table table-striped">
<tr>
<td><input name="cstFName" type="text" value="<?php echo $row['cstFName'];?>" maxlength="100" id="cstFName" /> 
<input name="cstLName" type="text" value="<?php echo $row['cstLName'];?>" maxlength="100" id="cstLName" />
</td>
</tr>

<?php
mysqli_close($con);
?>
</body>
</html>
