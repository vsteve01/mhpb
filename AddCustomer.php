<HTML>
<HEAD>
<TITLE>
Add Customer
</TITlE>
</HEAD>
<BODY>

<form action="insertcustomer.php" method="post">
Firstname: <input type="text" name="cstFName"><br>
Lastname: <input type="text" name="cstLName"><br>
Address: <input type="text" name="cstAddr1"><br>
City: <input type="text" name="cstCityLid"><br>
<!--State: <input type="text" name="cstStateLid"><br> -->
State: 
<Select name="cstStateLid">
<option value="1" selected>SA</option>
<option value="2">VIC</option>
<option value="3">NSW</option>
<option value="4">NT</option>
<option value="5">WA</option>
<option value="6">TAS</option>
<option value="7">ACT</option>
<option value="8">QLD</option>
</select><br>
Postcode: <input type="text" name="cstZip"><br>
Home Phone: <input type="text" name="cstHphone"><br>
Mobile Phone: <input type="text" name="cstMphone"><br>
Email Address: <input type="text" name="cstEmail"><br>
<input type="submit">
</form>




</BODY>
