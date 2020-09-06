<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>DiQuinzio Productions | Contact</title>
    <link rel="stylesheet" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
   

  </head>

  <body>

    <header>
        <a href="index.html"><img src="images/DP_Website_Header.png"alt="DiQuinzio Productions" width="860" height="330"></a>
        <div id="playtop"><a name="playtop"></a></div>
    </header>

    <nav>

      <div id="aboutbutton"><a href="about.html">ABOUT</a></div>
      <div id="contactbutton"><a href="contact.html">CONTACT</a></div>
    </nav>

    <main>
    <div class="padder"></div>
    <div id="contact">
    <div id="contact_description">
        


        <?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $to = "carl.diquinzio@gmail.com";

    $email_from = '$visitor_email';
 
    $email_subject = "$subject";
 
    $email_body = "You have received a new message from $name:\n".
                            "\n".
                            "$message \n \n".

 
 
  $headers = "From: $visitor_email\r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  /*mail($to,$email_subject,$email_body,$headers);*/
 

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
 
if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}


if ( mail($to,$email_subject,$email_body,$headers) ) { 
echo  
"Thank you, Your email has been sent.";  
}else{  
echo "Sorry, Your email has failed. Please directly email carl.diquinzio@gmail.com."; 
} 
?>



</div>
    </div>
    <div class="padder"></div>
    </main>

  <footer>

    <div id="copyright">Copyright &#169; Carl DiQuinzio, 2015</div>
    <div id="credit">Website by Sean Pentland / Graphic Design by Matt Zielinski</div>

    </footer>

  </body>

</html>