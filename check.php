<!DOCTYPE html> 
<html>
<Head><Title>Home
</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<BODY>

<?php
include 'connect.php';

$result = mysql_query("SELECT * from Customer WHERE (cstFName like '$q')); 

mysqli_close($con);
?>
</body>
</html>
