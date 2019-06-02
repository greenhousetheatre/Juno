<?php

if($_POST["submit"]) {
    $recipient="info@boxedintheatre.com";
    $subject="Form to email message";
    $sender=$_POST["user_name"];
    $senderEmail=$_POST["user_mail"];
    $message=$_POST["user_message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head>

<title>The Greenhouse Theatre: Creatives</title>
    
    <link rel="shortcut icon" href="https://i.imgur.com/qA1WgW0.png"/>
    <link rel="stylesheet" type="text/css" href="pagestyle.css"/>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" type='text/css'/>
    <link href='https://static.tumblr.com/wb7siqo/Omqnia97g/cssnormalize.css' rel='stylesheet' type='text/css'/><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
		$(document).ready(function() {
    		$(".clickmenu").click(function() {
        		$(".red, .orange, .yellow").toggleClass("spin"); 
        		$("#navbar, .clickmenu, body").toggleClass("clicked");
			});
    	});
	</script>
	
<style type="text/css">
body {
    margin:0px;
    padding:0px;
    background-color:#000;
    font-size: 62.5%;
    line-height:150%;
    letter-spacing:0.2px;
    font-family:'Source Sans Pro', sans-serif;
    color:#000;
	overflow-y: scroll;
	overflow-x: hidden;
    -webkit-transition: all 0.4s linear;
    -moz-transition: all 0.4s linear;
    -o-transition: all 0.4s linear;
    transition: all 0.4s linear;}
    
    form {
  /* Just to center the form on the page */
  margin: 0 auto;
  width: 90%;
  /* To see the outline of the form */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* To make sure that all labels have the same size and are properly aligned */
  display: inline;
  width: 90px;
  text-align: right;
}

input, textarea {
  font: 1em sans-serif;
  width: 100%;
  box-sizing: border-box;
  border: 1px solid #999;
}

input:focus, textarea:focus {
  border-color: #000;
}

textarea {
  vertical-align: top;
  height: 5em;
}

input[type=submit] {
  background-color: #e6b372;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 100%;
  align: 
}
</style></head>
 
<body>

<!-- Preface type info -->
<div class="marshmallow">
    <div id="navbar" class="stick">
        <a class="no" href="/home.html">Home</a>
        <div class="mini-menu how"><div class="no how">What's On</div>
            <div class="more-links charlie">
            <a href="/schedule.html">Schedule</a>
            <div class="break"></div>
            <a href="/workshops.html">Workshops</a>
            <div class="break"></div>
            <a href="/music.html">Music</a>
        </div></div>
    <div class="mini-menu how"><div class="no how">About Us</div>
        <div class="more-links bravo">
            <a href="/mission.html">Mission Statement</a>
            <div class="break"></div>
            <a href="/creatives.html">Our Team</a>
            <div class="break"></div>
            <a href="/venue.html">The Venue</a>
            <div class="break"></div>
            <a href="/contact.php">Contact</a>
            <div class="break">
            <a href="/management.html">BoxedIn Theatre</a>
            <div class="break"></div>
            </div>
        </div></div>
    <div class="mini-menu how"><div class="no how">Resources</div>
        <div class="more-links charlie">
            <a href="/sponsorship.html">Sponsorship</a>
            <div class="break"></div>
            <a href="/access.html">Access</a>
            <div class="break"></div>
            <a href="/brochure.html">E-brochure</a>
        </div></div>
    <a class="no" href="https://boxedintheatre.com/blog/">Blog</a>
    <a class="no" href="/initiative.html">Initiative</a>
</div>  
    <div class="clickmenu">
        <div class="line red"></div>
        <div class="line orange"></div>
        <div class="line yellow"></div>
    </div>

<div class="spacer"></div>

<div class="contentbox">
	<div class="textbox">
	    <div class="header">
	        Contact Us
	    </div>
	    <p>Like what we're doing? Got some questions? Just feel like saying hi? Awesome - drop us a line here, and we'll get back to you as soon as we can!</p>
	    
<form action="contact.php" method="post">
  <div>
    <label for="name">Name:</label>
    <input name="user_name">
  </div>
  <div>
    <label for="mail">E-mail:</label>
    <input name="user_mail">
  </div>
  <div>
    <label for="msg">Message:</label>
    <textarea name="user_message"></textarea>
  </div>
  <div class="button">
  <input type="submit" name="submit" value="Hit us up!">
</div>
</form>

<?=$thankYou ?>
	    
	    
</div><div class="credits">
	    <div class="star">
	    &diams;</div>
	    <a href="https://www.facebook.com/The-Greenhouse-by-BoxedIn-Theatre-2197180407189597/"> <img src="/assets/images/facebook.png" style="width:40px;height:40px;"> </a>&nbsp;&nbsp;
	    <a href="https://twitter.com/greenhouse_BI/"> <img src="/assets/images/twitter.png" style="width:40px;height:40px;"> </a>&nbsp;&nbsp;
	   <a href="https://www.instagram.com/thegreenhouseboxedin/"> <img src="/assets/images/instagram.png" style="width:40px;height:40px;"> </a>
	    <div style="float:right">Designed by Mia Ferraiolo<br><b>&copy; Greenhouse Theatre</b></div>
	</div></div></div>

</body></html>
