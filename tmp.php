<?php
$link = mysql_connect("localhost","root","donkey");
$dbSelected = mysql_select_db('mhpb');
$id="-1,";
$cname="Select City,";
$sid = $_GET['sid'];
if($sid=="-1")
{
 $response = $id."|".$cname;
 echo $response;
}
else
{
 $result = mysql_query("SELECT `SubId`, `SubName` FROM `Suburb` WHERE `SubState` = ".$sid." ORDER BY `SubName` ASC");
 
 while($row = mysql_fetch_assoc($result))
 {
  $id .=$row['city_id'].",";
  $cname .=$row['city_name'].",";
 }
 $response = $id."|".$cname;
 echo $response;
}
?>
