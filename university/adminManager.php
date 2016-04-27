<!-- author : Hrushikesh Joshi -->
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('db_connect.php');
if (isset($_POST['AtPageLoad']))
{
    $res = mysql_query("SELECT ID,AdminName,AdminPass,AdminEmail,AdminNote,AdminPhone FROM adminmaster where IsMasterAdmin=0");
    
    if(!$res){
        echo 'Couldn\'t issue database query';
        die(mysql_error());
    }else{
        echo '<table align = "left" cellspacing = "2" border = "1" cellpadding = "8">'
        . '<tr><td align = "left"><b>Admin Name</b></td>'
                
                . '<td align = "left"><b>Admin Email</b></td>'
                . '<td align = "left"><b>Admin Note</b></td>'
                . '<td align = "left"><b>Admin Phone</b></td>';
        
        while($row = mysql_fetch_array($res)){
            echo '<tr><td align = "left">'.
                $row["AdminName"] . '</td><td align = "left">'.
                
                $row["AdminEmail"] . '</td><td align = "left">'.
                $row["AdminNote"] . '</td><td align = "left">'.
                $row["AdminPhone"] . '</td><td align = "left">'
                . '<a href = "adminForm.html?id='.$row["ID"].'">Edit</a></td>';
                echo '</tr>';
        }
        echo '</table>';
    }
}
?>
