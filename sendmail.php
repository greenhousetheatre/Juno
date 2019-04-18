<?php
if(!isset($_POST['contactus']))
{
	echo "Error: Please submit form!";
}
$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$visitor_subject = $_POST['visitor_subject'];

//Validate first
if(empty($visitor_name)||empty($visitor_email)) 
{
    echo "Error: Please enter your name and email address!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Error!";
    exit;
}

$email_from = "ofgalaxies@gmail.com";
$email_subject = "Message from $visitor_name for BoxedIn Theatre";
$email_body = "You have received a new message from $visitor_name, $visitor_email.\n".
	"Here is the message:\n $visitor_subject".
    
$to = "tom@amazing-designs.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header('Location: thankyou.html');

function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 