<?php
include 'connect.php';

$sql="insert into customer (cstFName, cstLName, cstAddr1, cstCityLid, cstStateLid, cstZip, cstHphone, cstMphone, cstEmail)
values
('$_POST[cstFName]','$_POST[cstLName]','$_POST[cstAddr1]','$_POST[cstCityLid]','$_POST[cstStateLid]','$_POST[cstZip]','$_POST[cstHphone]','$_POST[cstMphone]','$_POST[cstEmail]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
printf ("New Record has id %d.\n", $mysqli->insert_id);
echo "1 record added";

mysqli_close($con);
?>
