<!DOCTYPE html> 
<html>
<Head><Title>Home
</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script>
var xmlhttp;
function ajaxFunction(url,myReadyStateFunc)
{
   if (window.XMLHttpRequest)
   {
      // For IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
   }
   else
   {
      // For IE5, IE6
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange= myReadyStateFunc;        // myReadyStateFunc = function
   xmlhttp.open("GET",url,true);
   xmlhttp.send();
}


function updatesuburblist(x) {
var y = "\"" + x + "\"";
  ajaxFunction("getsuburb.php?sid=" +y, function()
   {
       if (xmlhttp.readyState==4 && xmlhttp.status==200)
       {
              var c = xmlhttp.responseText;
              c=c.split("|");
              cid = c[0].split(",");
              cval = c[1].split(",");
    
             ct = document.getElementById('cstCityLid')
             ct.length=0 
             for(i=0;i<cid.length-1;i++)
            {
                   ct[i] = new Option(cval[i],cid[i])
            }
        }
    });


}
</script>
</head>
<BODY>

<?php
include 'connect.php';

$result = mysqli_query($con,"select * from customer where cstid = 70");
$row = mysqli_fetch_array($result);
$STATE='SA';
$subresult = mysqli_query($con,"select * from Suburb where SubState = '$STATE' Group By SubName order by SubName");


?>
<TABLE>
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
<select name="cstCityLid" id="cstCityLid">
<option selected ="Selected" value="-1">Select Suburb</option>
</select>
</td>
</tr>
<tr>
<td>Postcode</td>
<td>State
</td></tr>
<tr>
<td><input name="SubZip" type="text" value="<?php echo $subrow['SubZip'];?>" maxlength="6" id="SubZip" /></td>
<td><Select name="SubState" id="SubState" onchange="updatesuburblist(this.value)">
<option selected="Selected">SA</option>
<option Value="ACT">ACT</option>
<option>NSW</option>
<option>NT</option>
<option>QLD</option>
<option>TAS</option>
<option>VIC</option>
<option>WA</option>
</select>
</td>
</td>
</tr>
</table>

<?php echo $STATE; ?>

<?php
mysqli_close($con);
?>
</body>
</html>
