<html>
<Head><Title>Home
</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<BODY>

<?php
include 'connect.php';

$result = mysqli_query($con,"select * from customer where cstid = 54");

$row = mysqli_fetch_array($result);
?>
<TABLE>
<tr>
<td>First Name
</td>
<td>Last Name
</td>
</tr>
<tr>
<td><input name="cstFName" type="text" value="<?php echo $row['cstFName'];?>" maxlength="100" id="cstFName" />
</td>
<td><input name="cstLName" type="text" value="<?php echo $row['cstLName'];?>" maxlength="100" id="cstLName" />
</td>
</tr>
<tr>
<td>Address
</td>
<td>Suburb
</td>
</tr>
<tr>
<td><input name="cstAddr1" type="text" value="<?php echo $row['cstAddr1'];?>" maxlength="100" id="cstAddr1" />
</td>
<td><input name="cstCityLid" type="text" value="<?php echo $row['cstCityLid'];?>" maxlength="100" id="cstCityLid" />
</td>
</tr>
<tr>
<td>State</td>
<td>Postcode
</td></tr>
<tr>
<td><input name="cstStateLid" type="text" value="<?php echo $row['cstStateLid'];?>" maxlength="100" id="cstStateLid" />
</td>
<td><input name="cstZip" type="text" value="<?php echo $row['cstZip'];?>" maxlength="6" id="cstZip" />
</td>
</tr>
<tr>
<td>Home Number</td>
<td>Mobile Number
</td></tr>
<tr>
<td><input name="cstHphone" type="text" value="<?php echo $row['cstHphone'];?>" maxlength="14" id="cstHphone" />
</td>
<td><input name="cstMphone" type="text" value="<?php echo $row['cstMphone'];?>" maxlength="14" id="cstMphone" />
</td>
</tr>
<tr>
<td>Email
</td></tr>
<tr>
<td><input name="cstEmail" type="text" value="<?php echo $row['cstEmail'];?>" maxlength="14" id="cstEmail" />
</td>
</tr>
</TABLE>
<?php
mysqli_close($con);
?>
</body>
</html>
