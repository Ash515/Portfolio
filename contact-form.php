<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];



$email_from = 'aaashwin515@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name : $name.\n".
"User Email:$visitor_email.\n".
"User Message:$message.\n";

$to = "theyoungtech58@gmail.com";
$headers="From:" $email_from \r\n;
$headers="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: Home.html");

if(mail($to,$subject,$message,$headers)){
	echo "<h1>Sent Successfully! Thank you" " "$name ", I will contact you</h1>";
}
else{
	echo "Something went wrong !";
}
}
?>