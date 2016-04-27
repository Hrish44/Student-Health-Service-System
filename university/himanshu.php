

<!-- connecting to database -->
<?php
include('db_connect.php');
?>
<html>
<head>
</head>
<body>


	<form action="himanshu.php" method="POST">
ADD GROUP NAME AND DESCRIPTION<br><br>
Group Name: <br><input id="nameid" type="text" name="text"><br><br>
Group Description: <br><textarea  name="desc" rows="5" cols="30" ></textarea><br><br>
<input type="submit" name="submit" value="submit">
</form>


<?php
if(!isset($_POST['submit'])) {
	echo "post submit error";
}
if(isset($_POST["text"])){
$name=$_POST["text"];
$desc=$_POST["desc"];
if(isset($name) && isset($desc)){
$name1= mysql_real_escape_string($name);
$desc1= mysql_real_escape_string($desc);

$query="INSERT INTO groupmaster (GroupName,GroupDescription) values('$name1','$desc1')";
$qresult=mysql_query($query) or die(mysql_error());
if($qresult){
	header("Location: http://localhost/university%20database/himanshu2.php?id=".$_POST['text']."&err=".$login."&id1=".$_POST['desc']."&err=".$login);
}
}

}

?>

</body>
</html>
