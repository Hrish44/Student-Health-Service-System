<?php
    //phpinfo();
?>



!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin Information</title>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </head>
    <body>
    	<table>
    		<tr>
      		<td>
      			From Date:
      		</td>
      		<td>
      			<input type='date' name='name3' id='datepicFrom' disabled="true"  />
      			
      		</td>
      	</tr>
      	<tr>
      		<td>
      			To Date:
      		</td>
      		<td>
      			<input type='date' name='name3' id='datepicTo' disabled="true" />
      		</td>
      	</tr>
      	<tr>
      		<td>
      			<input type='submit' name='Submit' value='Search' onclick="OnSubmit();" />
      		</td>
      	</tr>
    		
    	</table>
    	
    </body>
</html>