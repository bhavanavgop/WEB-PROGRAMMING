<?php
$con=mysqil_connect("localhost","20mca021","2454","20mca021");
$id=$_GET["id"];
if($con)
{

$qry1="delete from student_name where id="$id";
if(mysqil_query($con,$qry1))
{
echo"Data Removed<br>"
}
}
?>
