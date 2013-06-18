<!DOCTYPE html> 
<HTML>
<HEAD>
<TITLE>
Add Customer
</TITlE>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</HEAD>
<BODY>
<?php
include 'connect.php';

$subresult = mysqli_query($con,"select * from Suburb where SubState='SA' Group By SubName order by SubName");


$refresult = mysqli_query($con,"select RefType from Referals");
$reflist = mysqli_fetch_array($refresult);

?>

<form action="insertcustomer.php" method="post">
<TABLE>
<tr>
<td>First Name
</td>
<td>Last Name
</td>
</tr>
<tr>
<td><input name="cstFName" type="text" align="middle" value="<?php echo $row['cstFName'];?>" maxlength="100" id="cstFName" />
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
<td>
<select name="cstCityLid">
<option selected ="Selected"></option>
<?php
while($subrow = mysqli_fetch_array($subresult)) {
            echo '<option value="'.$subrow['SubId'].'">'. $subrow['SubName'].'</option>';
        }
?>
</select>
</td>
</tr>
<tr>
<td>Postcode</td>
<td>State
</td></tr>
<tr>
<td><input name="SubZip" type="text" value="<?php echo $subrow['SubZip'];?>" maxlength="6" id="SubZip" />
<td><input name="SubState" type="text" value="<?php echo $subrow['SubState'];?>" maxlength="100" id="SubState" />
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
<td>
<select name="cstReferralId">
<option selected ="Selected"><?php echo $refrow['RefType'];?></option>
<?php
while($reflist = mysqli_fetch_array($refresult)) {
            echo '<option value="'.$reflist['RefId'].'">'. $reflist['RefType'].'</option>';
        }
?>
</select>

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
<td>Entry Created: <?php echo date("d M Y",strtotime($row['cstDateAdded']));?> by: <?php echo $row['cstUserAdded'];?> 
</td>
</tr>
<tr>
<td>Last Updated: <?php echo date("d M Y",strtotime($row['cstDateEdited']));?> by: <?php echo $row['cstUserEdited'];?>
</td>
</tr>
</table>
<input type="submit">
</form>




</BODY>
