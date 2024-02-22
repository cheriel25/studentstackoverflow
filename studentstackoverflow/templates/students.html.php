  
  
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>students admin</title>
     
      
</head>
<body>

<section class="admin">
  
        
  
<h4><p><?=$totalStudents?> students have been submitted to the Student Stack Overflow.</p> </h4>
<br>

<?php
 foreach($students as $student): ?>
    <blockquote>
         
     

    
    <br>Name:  <?=htmlspecialchars($student['name'], ENT_QUOTES,'UTF-8'); ?></a> </br>
    


        <a href="editstudent.php?id=<?=$student['id']?>">Edit</a>

  

        <form action="deletestudent.php" method="post">
            <input type="hidden" name="id" value="<?=$student['id']?>">
            <input type="submit" value="Delete">
        </form> 
 </blockquote>
    <?php endforeach;?> 

   </div></div></section>
</body>
</html>