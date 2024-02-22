  
  
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>module admin</title>
     
      
</head>
<body>

<section class="admin">
  
        
  
<h4><p><?=$totalModules?> modules have been submitted to the Student Stack Overflow.</p> </h4>
<br>

<?php
 foreach($modules as $module): ?>
    <blockquote>
         
        <br/><?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8')?>

       

        <a href="editmodule.php?id=<?=$module['id']?>">Edit</a>

  

        <form action="deletemodule.php" method="post">
            <input type="hidden" name="id" value="<?=$module['id']?>">
            <input type="submit" value="Delete">
        </form> 
 </blockquote>
    <?php endforeach;?> 

   </div></div></section>
</body>
</html>