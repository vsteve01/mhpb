<?php
include 'connect.php';

$result = mysqli_query($con,"SELECT * FROM customer");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['cstFName'] . "</td>";
  echo "<td>" . $row['cstLName'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);


?>
