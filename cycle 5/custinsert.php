<?php
$servername = "localhost";
$username = "20mca021";
$password = "2454";
$dbname = "20mca021";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
die("connection failed:" . mysqli_connect_error());
}
$a = $_POST["c_name"];
$b = $_POST["item_purchased"];
$c = $_POST["mob_no"];
$sql = "INSERT INTO customer(c_name,item_purchased,mob_no) 
VALUES('$a','$b','$c')";
if(mysqli_query($conn, $sql))
{
	echo "New record created successfully";
}
else
{
	echo "error:" .$sql . "<br>" . mysqli_error($conn);
}
$sql = "SELECT c_no, c_name, item_purchased, mob_no FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>C_NO</th><th>Customer Name</th><th>Item purchased</th><th>Mobile Number</th></tr>";
  while($row = $result->fetch_assoc())
 {
 echo "<tr>
<td>".$row["c_no"]."</td>
<td>".$row["c_name"]."</td>
<td> ".$row["item_purchased"]."</td>
<td>".$row["mob_no"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>