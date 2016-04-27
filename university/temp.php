<?php

include('db_connect.php');


if(isset($_POST['GetTextArea']))
{

	
	$idd=$_POST['GetTextArea'];
	$query = "SELECT TemplateText FROM templatemaster WHERE TemplateId=$idd";	

	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	$row=mysql_fetch_array($result);

	/*while($row =mysql_fetch_array($result))
	{
		$allMeg[]=$row['TemplateText']."";
	}*/


	//unset($_POST['GetTextArea']);
	echo $row[0];

}


else if(isset($_POST['update']))
{


	
//	echo $_POST['update'];
	
	//return;
	$updatedtext=$_POST['textname'];
	$updatedname=$_POST['textarea'];
	$abc=($_POST['ID']);
	$editupdate="UPDATE templatemaster
				SET TemplateText='$updatedname', TemplateName='$updatedtext'
				WHERE TemplateId=$abc";
$resultofthis = mysql_query($editupdate) or die(mysql_error()."[".$query."]");

//echo $abc;
//unset($_POST['update']);
//header("Location: http://localhost/university%20database/EmailTemplate.php");



}

else if(isset($_POST['insert'])){
	
$updatedtext1=$_POST['textname'];
$updatedname1=$_POST['textarea'];
$que="INSERT INTO templatemaster (TemplateId, TemplateName, TemplateText)
        VALUES ('null', '$updatedtext1', '$updatedname1')";
$res=mysql_query($que) or die(mysql_error()."[".$que."]");
unset($_POST['submit']);
//header("Location: http://localhost/university%20database/EmailTemplate.php");

}
//unset($_POST['insert']);
if(isset($_POST['delete'])){
	$aa=$_POST['aa'];
	$quee="DELETE FROM templatemaster WHERE TemplateId=$aa";
	$ress=mysql_query($quee) or die(mysql_error()."[".$quee."]");

}

?>