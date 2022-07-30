<html>
<head>
</head>
<style type="text/css">
table
{
border-collapse:;
width: 80%;
color: black;
font-family: monospace;
font-size: 20px;
text-align: Center;
}

</style>
<body>
<body style="background-color:white">
<table>
<tr>
<th>Name</th>
<th>Buying Price</th>
</br>
<th>Selling Price</th>
<th>Profit</th>
</tr>

<?php

$con = mysqli_connect("127.0.0.1", "root", "", "pd");
if ($con->connect_error) 
{
	die("Connection Faild:" . $con->connect_error);
}

$sql = "SELECT * from product";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
	while ($row = $result->fetch_assoc()) {
		$profit = $row["Selling_Price"] - $row["Buying_Price"];
		$id = $row['id'];
		echo "<tr>";
		echo "<td>" . $row["Name"] . "</td><td>" . $row["Buying_Price"] . "</td><td>" . $row["Selling_Price"] . "</td><td>" . $profit . "</td>";
		echo "<td><a href='edit.php?id=$id'>Edit</a></td>";
		echo "<td><a href='delete.php?id=$id'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
}
else 
{
	echo "0 result";
}
$con->close();

?>


</table>

</body>


</html>