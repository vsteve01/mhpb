<?php
//set IE read from page only not read from cache
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");

header("content-type: application/x-javascript; charset=tis-620");

$data=$_GET['data'];
$val=$_GET['val'];

//set database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "donkey";
$dbname    = "mhpb";
mysql_pconnect($dbhost,$dbuser,$dbpass) or die ("Unable to connect to MySQL server");

if ($data=='cities') { // second dropdown
  echo "<select name='cities' >\n";
  echo "<option value='0'>====choose cities ====</option>\n";                   
  $result=mysql_db_query($dbname,"SELECT `SubId`, `SubName` FROM Suburb WHERE `SubState` = '$val' ORDER BY `SubName` ");
  while(list($id, $name)=mysql_fetch_array($result)){
       echo "<option value=\"$id\" >$name</option> \n" ;
  }
}
echo "</select>\n";
?>

