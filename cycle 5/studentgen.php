<html>
<head>
<title>general form</title>
</head>
<body bgcolor="aakk">
<form action = "<?php $_PHP_SELF ?>" method = "POST">
Name:
<input type = "text" name = "txtname">
<br><br>
Roll no.:
<input type = "text" name = "txtr_no">
<br><br>
Gender:
<input type = "text" name = "txtgen">
<br><br>

Address:
<textarea name = "add" type = "textarea"></textarea>
<br><br>
<input type = "Submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancle">
</form>
</body>
</html>

<?php
if(isset($_POST['insert']))
 {
 $con = mysql_connect("localhost","root","");
 if($con)
 {
echo "Mysql connection ok<br>";
mysql_select_db("studinfo",$con);
$name =$_POST['txtname'];
$rollno = $_POST['txtr_no'];
$gender =$_POST['txtgen'];
$address = $_POST['add'];
$insert = "insert into info values('$name',$rollno,'$gender','$address')";
if(mysql_query($insert,$con))
{
echo "Data inserted successfully<br>";
}
$query = "select * from info";
$sldt = mysql_query($query,$con);
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Roll No</th>
<th>Gender</th>
<th>Address</th>
</tr>";
while($row = mysql_fetch_array($sldt))

{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['gen']."</td>";
echo "<td>".$row['address']."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
 }
 }
?>
