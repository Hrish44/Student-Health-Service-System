<!-- author : Hrushikesh Joshi -->
<html>
    <head>
        <title> Registration form</title>
        
  
    </head>
    <body>
        <form  method='post' action='StudentRegistration.php'>
            <table width='400' border='5' align='center'>
                <tr>
                    <td colspan='5' align='center'> <h1>Registration form</h1></td>
                     
                </tr>
                <tr>
                    <td align='center'>StudentID:</td>
                    <td><input type='text' name='SID' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Password:</td>
                    <td><input type='password' name='pass' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Name:</td>
                    <td><input type='text' name='name' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Email:</td>
                    <td><input type='text' name='email' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Phone Number:</td>
                    <td><input type='text' name='pnum' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Carrier</td>
                    <td>
                    <?php
                    include('db_connect.php');
                    $query = "SELECT * FROM sms";

                    $result = mysql_query($query) or die(mysql_error()."[".$query."]");
                    ?>
                     <select name='list' id='list'>
                        <?php
                        while ($row = mysql_fetch_array($result))
                        {
                        echo "<option value='".$row['carrier']."'>" . $row['name']."</option>";
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <td align='center'>Address 1:</td>
                    <td><input type='text' name='add1' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Address 2:</td>
                    <td><input type='text' name='add2' style="width: 300px;"/></td>
                </tr>
                
                <tr>
                    <td align='center'>City:</td>
                    <td><input type='text' name='city' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>State:</td>
                    <td><input type='text' name='state' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Postal Code:</td>
                    <td><input type='text' name='zip' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Note:</td>
                    <td><input type='text' name='note' style="width: 300px;"/></td>
                </tr>
                <tr>
                    <td align='center'>Date of Birth (yyyy/mm/dd):</td>
                    <td><input type='text' name='dob' style="width: 300px;"/></td>
   					
   					                
                </tr>
            
            	<tr>
                    <td align='center'>Age:</td>
                    <td><input type='text' name='age' style="width: 300px;"/></td>
   					               
                </tr>
            
                
                <tr>
                    <td colspan='5' align='center'><input type='submit' name='submit'
                        value='Sign Up' /></td>
                    <td></td>
                </tr>
            
            
            </table>
         
        </form>
        
        <center><b>Already Registered</b><br>
        <a href='studentlogin.php'> Login Here</a></center>
    </body>
</html>

<?php

 include('db_connect.php');


 if(isset($_POST['submit'])) {
            $StudentID = $_POST['SID'];
            $StudentPass = $_POST['pass'];
            $StudentName = $_POST['name'];
			$StudentEmail = $_POST['email'];
			$StudentPhone = $_POST['pnum'];
            $StudentPhoneCarrier = $_POST['list'];
			$StudentCity = $_POST['city'];
			$StudentState = $_POST['state'];
			$StudentZip = $_POST['zip'];
			$StudentAdd1 = $_POST['add1'];
			$StudentAdd2 = $_POST['add2'];
			$StudentNote = $_POST['note'];
			$StudentDoB = $_POST['dob'];
			$StudentAge = $_POST['age'];
			
			
if($StudentID=='') {
            echo "<script>alert('Enter a valid StudentID')</script>";
            exit();
        }

if($StudentPass=='') {
            echo "<script>alert('Password Required')</script>";
            exit();
        }

if($StudentEmail=='') {
            echo "<script>alert('Enter a valid Email ID')</script>";
            exit();
        }

if($StudentDoB=='') {
            echo "<script>alert('Enter a valid Date')</script>";
            exit();
        }

if($StudentAge=='') {
            echo "<script>alert('Enter a valid Age')</script>";
            exit();
        }


$query="insert into studentmaster(StudentID, StudentPass, StudentName, StudentEmail, StudentPhone, StudentPhoneCarrier, StudentCity, StudentState, StudentZip, StudentAdd1, StudentAdd2, 
		StudentNote, StudentDoB, StudentAge) values('$StudentID', '$StudentPass', '$StudentName', '$StudentEmail', '$StudentPhone', '$StudentPhoneCarrier', '$StudentCity', '$StudentState',
'$StudentZip', '$StudentAdd1', '$StudentAdd2', '$StudentNote', '$StudentDoB', '$StudentAge')";
 
if(mysql_query($query)) {
            echo "<script>window.open('studentlogin.php','_self')</script>";
        }
     
 }

?>
