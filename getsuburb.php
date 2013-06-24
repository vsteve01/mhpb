<?php
include 'connect.php';

$id="-1,";
$cname="Select Suburb,";
$sid = $_GET['sid'];
if($sid=="-1")
{
# $response = $id."|".$cname;
# echo $response;
}
else
{
 $subresult = mysqli_query($con,"select SubId, SubName from Suburb where SubState = ".$sid." Group By SubName order by SubName");
 
 while($row = mysqli_fetch_array($subresult))
 {
  $id .=$row['SubId'].",";
  $cname .=$row['SubName'].",";
 }
 $response = $id."|".$cname;
 echo $response;
}
?>
