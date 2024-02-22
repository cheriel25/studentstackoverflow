<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../questions.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
    <title> <?=$title?> </title>
</head>
<body>
    <header>
    
    <a href="adminindex.php" class="logo">Student Stack Overflow </a> 
  
    <ul class= "navlist">
          <!--   <li><a href = "index.php"> Home </a> </li>!-->
          <li><a href = "adminindex.php"> Home </a> </li>
            <li><a href = "questions.php"> Question List </a> </li>
           <li><a href = "addquestion.php"> Add question </a> </li> 

           <li><a href = "modules.php"> Module List </a> </li> 
           <li><a href = "addmodule.php"> Add module </a> </li> 

           <li><a href = "students.php"> Student List </a> </li> 
           <li><a href = "addstudent.php"> Add student </a> </li> 
         
          <li><a href= "../index.php">Public Site / Log Out</a><li>
            
        </ul>
        </header>
    <main>
 
        <p>
        <?=$output?></p>

 
    </main> 
    <footer><h5> &copy; SSOF 2023</h5> </footer>
</div > 
   


</body>
</html>

   
   

    
