<?php
include('db_connect.php');
?>
<?php  echo "<select name='list' >";
$queryy="SELECT * FROM groupmaster";
$res=mysql_query($queryy) or die(mysql_error());

while ($row = mysql_fetch_array($res))
{
echo "<option value='".$row['GroupID']."'>" . $row['GroupName']."</option>";
}
?>
</select>
<html>

<body>
<form method="POST" action="himanshu4.php">
<?php
$quer="SELECT * FROM studentmaster";
$res=mysql_query($quer) or die(mysql_error());
echo "<table border='1' padding-top: '0cm' style='width:50%''>";
echo "<tr><td>checkbox</td><td> Id </td><td>Name</td></tr>";
echo $_GET['id'];
echo "<br>";
echo $_GET['id1'];

	
while ($row = mysql_fetch_array($res))
{
	
	
	echo "<td>".$row['StudentID']."    </td>";
	echo "<td>".$row['StudentName']."   <t/d>";
	echo "<td>".$row['StudentEmail']."     </td></tr>";


}
echo "</select>";
echo "</table>";


?>
<br>
<br>
<input type="submit" name="submit" id="set" value="Submit">
</form>



</body>
</html>
