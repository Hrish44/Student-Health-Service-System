<!-- author : Hrushikesh Joshi -->
<?php
include('db_connect.php');

if (isset($_POST['AtPageLoad']))
{
    $res = mysql_query("SELECT AdminName,AdminPass,AdminEmail,AdminNote,AdminPhone FROM adminmaster");
    
    if(!$res){
        echo 'Couldn\'t issue database query';
        die(mysql_error());
    }else{
        echo '<table align = "left" cellspacing = "2" border = "1" cellpadding = "8">'
        . '<tr><td align = "left"><b>Admin Name</b></td>'
                . '<td align = "left"><b>Admin Password</b></td>'
                . '<td align = "left"><b>Admin Email</b></td>'
                . '<td align = "left"><b>Admin Note</b></td>'
                . '<td align = "left"><b>Admin Phone</b></td>';
        
        while($row = mysql_fetch_array($res)){
            echo '<tr><td align = "left">'.
                $row[0] . '</td><td align = "left">'.
                $row[1] . '</td><td align = "left">'.
                $row[2] . '</td><td align = "left">'.
                $row[3] . '</td><td align = "left">'.
                $row[4] . '</td><td align = "left">'
                . '<a href = "adminForm.html">Edit</a></td>';
                echo '</tr>';
        }
        echo '</table>';
    }
}
?>
