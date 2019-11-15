<?php
if(isset($_POST['name']) && isset($_POST['email']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$to = 'mamta0525@gmail.com';
$subject = 'regarding website';
$body = '<html>
	<body>
		<h2>Feedback example</h2>
		<br>
		<p>Name<br>'.$name.'</p>
		<p>Email<br>'.$email.'</p>
	</body>
	</html>';
$headers = "From:".$name." < ".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "HTML-Version: 1.0\r\n";
$headers .= "Content-type: text/html : charset-utf-8";

$send=mail($to,$subject,$body,$headers);
if($send) 
{
echo '<br>';
echo 'thanks for contacting me. We will be shortly contacting you!!!';
}
else
{
echo 'error';
}
}
?>

<!doctype html>
<html>
	<head>
		<title>Simple content form with php</title>
		<meta charset="utf-8">
	</head>
	<body>
	<form action="" method="post">
	<input type="text" name="name" placeholder="Enter name">
<br>
<input type="text" name="email" placeholder="Enter email">
<br>
<button type="submit">Submit</button>
</form>
</body>
</html>