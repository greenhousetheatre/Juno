<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "Error: Please submit form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Error: Please enter your name and email address!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = "ofgalaxies@gmail.com";
$email_subject = "Message for BoxedIn Theatre";
$email_body = "You have received a new message from $name, $visitor_email:\n $message".
    
$to = "ofgalaxies@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header('Location: thankyou.html');


// Function to validate against any email injection attempts
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