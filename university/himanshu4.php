<?php
include('db_connect.php');
?>

<html>
<head>
	
<meta charset="utf-8">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker1" ).datepicker();
});
$(function() {
$( "#datepicker2" ).datepicker();
});
</script>


</head>
<body>


	<p>Date From : <input type="text" name="date1" onchange="change();" id="datepicker1"></p>
	<p>Date From : <input type="text" name="date2" onchange="change();" id="datepicker2"></p>

	<!-- <p>Date From : <input type="text" name="date2" id="datepicker2"></p> -->

<br>
<input type="button" onclick="savethem();" name="submit" id="set" value="Submit">


<script type="text/javascript">
var global="";
// function savethere(el){
// 	if(el.checked){
// 	global+=el.value;
// 	global+=",";
	
// 	}
// 	else{
// 		var str = el.value+",";
// 		//var res = str.replace("Microsoft", "W3Schools");
	
// 		global=global.replace(str,"");
// 		}
// 	}

var date1="";
var date2="";
function change(){

	date1=document.getElementById('datepicker1').value;
	

	date2=document.getElementById('datepicker2').value;



}
function savethem(){

	$.ajax({type:"post",url:"himanshu5.php",data:{date11:date1,date22:date2}}).done(
function(msg){
alert(msg);	
});
	
}


</script>
</script>
</body>
</html>