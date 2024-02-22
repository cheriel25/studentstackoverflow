<?php 
if(isset($_POST['message'])){
    $title = "contact us";
    $message = $_POST ['message'];

ini_set ("SMTP", "smtp.gre.ac.uk");
ini_set ("sendmail_from", "cl2128q@gre.ac.uk");
mail("cl2128q@gre.ac.uk", "mail test", $message);
$output = "Thank you for your message we will get back to you shortly!";
} else{
    $title = "contact us";
    ob_start();
    include 'templates/mailform.html';
    $output= ob_get_clean();
    include 'templates/layout.html.php';
    
    
}
include 'templates/thanks.html';
include 'templates/layout.html.php';


