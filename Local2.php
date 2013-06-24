<Select id=state>
<option value='SA'>South Australia</option>
<option value='NSW'>New South Wales</option>
</select>


     echo "States : <font id=states><select>\n";
     echo "<option value='SA'>South Australia</option> \n" ;
     echo "<option value='NSW'>NSW</option> \n" ;
     echo "</select></font>\n";
<?php     
     echo "Cities : <font id=cities><select>\n";
     echo "<option value='0'>=== none ===</option> \n" ;
     echo "</select></font>\n";
?>

<script language=Javascript>
function Inint_AJAX() {
try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
alert("XMLHttpRequest not supported");
return null;
};

function dochange(src, val) {
var req = Inint_AJAX();
req.onreadystatechange = function () {
 if (req.readyState==4) {
      if (req.status==200) {
           document.getElementById(src).innerHTML=req.responseText; //retuen value
      }
 }
};
req.open("GET", "state.php?data="+src+"&val="+val); //make connection
req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1"); // set Header
req.send(null); //send value
}

window.onLoad=dochange('states', -1);         // value in first dropdown
</script>
