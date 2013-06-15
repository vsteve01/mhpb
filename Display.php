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
<td>Postcode
</td>
</tr>
<tr>
<td><input name="cstAddr1" type="text" value="<?php echo $row['cstAddr1'];?>" maxlength="100" id="cstAddr1" />
</td>
<td><input name="cstZip" type="text" value="<?php echo $row['cstZip'];?>" maxle
ngth="6" id="cstZip" />
</td>
</tr>
<tr>
<td>Suburb</td>
<td>State
</td></tr>
<tr>
<td><input name="cstCityLid" type="text" value="<?php echo $row['cstCityLid'];?>" maxlength="100" id="cstCityLid" />
<td><input name="cstStateLid" type="text" value="<?php echo $row['cstStateLid'];?>" maxlength="100" id="cstStateLid" />
</td>
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
</td>
<td>Referral
</td>
</tr>
<tr>
<td><input name="cstEmail" type="text" value="<?php echo $row['cstEmail'];?>" maxlength="14" id="cstEmail" />
</td>
<td><input name="cstReferredLid" type="text" value="<?php echo $row['cstReferredLid'];?>" maxlength="14" id="cstReferredLid" />
</td>
</tr>
<tr>
<td>Alternate Contact
</td>
<td>Alternate Number
</td>
</tr>
<tr>
<td><input name="cstAltPerson" type="text" value="<?php echo $row['cstAltPerson'];?>" maxlength="40" id="cstAltPerson" />
</td>
<td><input name="cstAphone" type="text" value="<?php echo $row['cstAphone'];?>" maxlength="14" id="cstAphone" />
</td>
</tr>
<tr>
<td>Notes
</td>
</tr>
</table>
<table>
<tr>
<td><textarea name="cstNotes" rows="5" cols="100" style="width:415px; height:150px;" maxlength="2000" id="cstNotes" /><?php echo $row['cstNotes'];?></textarea>
</td>
</tr>
</TABLE>
<table>
<tr>
<td>Entry Created: <?php echo date("d M Y",strtotime($row['cstDateAdded']));?> by: <?php echo $row['cstUserAdded'];?> Last Updated: <?php echo date("d M Y",strtotime($row['cstDateEdited']));?> by: <?php echo $row['cstUserEdited'];?>
</td>
</tr>
</table>


<?php
mysqli_close($con);
?>
</body>
</html>
