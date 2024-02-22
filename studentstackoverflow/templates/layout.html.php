<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="questions.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
 
    <title> <?=$title?> </title>
</head>
<body>
    <header>
        
        <a href="#" class="logo">Student Stack Overflow </a> 
        
        <ul class= "navlist">
           
            <li><a href = "index.php"> Home </a> </li>
            <li><a href = "questions.php"> Questions List </a> </li>
            <li><a href ="contact.php">Contact Us</a></li>
            <li><a href ="signup.php"> Sign Up </a> <li>
            <li><a href="login.php">Admin</a><li>
    
         <!--   <li><a href="login.php">Log In</a></li> !-->
            
        </ul>

        <div class="bx  bx-menu" id="menu-icon"></div>
    </header>
   
    <main>
        <?=$output?>
    </main>

    <div class="computing-text">  
    <footer><h5> &copy; SSOF 2023</h5> </footer>
</div > 


</body>
</html>