<?php

$link = @mysqli_connect(
		'localhost',
		'root',
		'roy19961205',
		'phphw5');

$u_name=$_POST[u_name];
$u_num=$_POST[u_num];
$u_dep=$_POST[u_dep];
$u_email=$_POST[u_email];
$u_gender=$_POST[u_gender];
$u_date=$_POST[u_date];

$sql2="INSERT INTO hw5 (u_name , u_num , u_dep , u_email , u_gender , u_date) VALUES ('$u_name' , '$u_num' , '$u_dep' , '$u_email' 
	, '$u_gender' , '$u_date' )";
$result=mysqli_query($link, $sql2);

$result=mysqli_query($link,"SELECT * FROM hw5");
echo "<table border=1>";
while ($row=mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>";
echo $row["u_name"];
echo "</td><td>";
echo $row["u_num"];
echo "</td><td>";
echo $row["u_dep"];
echo "</td><td>";
echo $row["u_email"];
echo "</td><td>";
echo $row["u_gender"];
echo "</td><td>";
echo $row["u_date"];
echo "</td><tr>";
}
echo "</table>";

	
mysql_close($link);


?>
