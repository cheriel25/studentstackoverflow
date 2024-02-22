<?php
session_start();
if ($_SESSION['loggedin'] != 'Y'){
echo("<script>alert('Unauthorised Access')</script>
<script>window.location = '../login.php'</script>");
}   
?>


