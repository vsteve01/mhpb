<input type="text" name="mobile" id="mobile" onchange = "mobilecheck();" size="10" maxlength="30" value="" />
<input type="text" name="extension" id="extension" onchange = "extensioncheck();" size="10" maxlength="30" value="" />


<script>
//function start
var url = "check.php?q=";
function mobilecheck() {
   var idValue = document.getElementById("mobile").value;
   var myRandom=parseInt(Math.random()*99999999);  // cache buster
   if (idValue=="") return;
   http.open("GET", url + escape(idValue) + "&rand=" + myRandom, true);
   http.onreadystatechange = handleHttpResponse;
   http.send(null);
}

function extensioncheck() {
   var idValue = document.getElementById("extension").value;
   //the other are same with mobilecheck() so skip it
   //function end
</script>
