
<?php
include('db_connect.php');
require_once "Mail.php";
$que="select e.id,s.studentID,s.StudentPhone,s.StudentEmail,s.StudentName,t.TemplateId,t.TemplateName,t.TemplateText,a.AppointmentDate, a.AppointmentTime from StudentMaster s,emailqueue e,templatemaster t,appointmentmaster a where a.appointmentdate<=CURRENT_DATE and e.student_id=s.StudentID and t.templateid<>0 and e.is_sent=0";
$result = mysql_query($que) or die(mysql_error()."[".$que."]");
//$res=mysql_query($que);
while($row=mysql_fetch_array($result)){
	echo "hi";	
	$id=$row['id'];
	$email=$row['StudentEmail'];
	$subject=$row['TemplateName'];
	$description=$row['TemplateText'];

	$from = 'dummy.dbms@gmail.com';
	$to = $email;
	$subject = $subject;
	$body = $description;

	$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'dummy.dbms@gmail.com',
        'password' => 'dummydbms'
    ));
//$mail = $smtp->send('2019126424@txt.att.net', $headers, $body);
 $mail = $smtp->send($to, $headers, $body);
 
 	
 	$query="UPDATE emailqueue SET is_sent=1 WHERE id=$id";
 	mysql_query($query);
 		
/*

if (PEAR::isError($mail)) {
    // echo('<p>' . $mail->getMessage() . '</p>');
    $que="UPDATE emailqueue SET error_log=$mail->getMessage() WHERE id=$id";
	$result = mysql_query($que) or die(mysql_error()."[".$que."]");
	} else {
		$que="UPDATE emailqueue SET is_sent=1 WHERE id=$id";
		$result = mysql_query($que) or die(mysql_error()."[".$que."]");

    // echo('<p>Message successfully sent!</p>');
}*/

}

?>
